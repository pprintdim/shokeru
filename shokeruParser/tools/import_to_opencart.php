<?php
/**
 * Імпорт спарсених товарів у OpenCart 3.0.5.0 (БД shokeru).
 *   php import_to_opencart.php --clean --limit=3
 *     --clean   : очистити всі товари/категорії/атрибути перед імпортом
 *     --limit=N : скільки товарів імпортувати (0 = усі)
 *     --offset=N: з якого товару почати (для продовження)
 * Контент пишеться в language_id 2 (uk-ua, фронт) і 3 (ru) — текст російський.
 */
error_reporting(E_ALL & ~E_DEPRECATED);
$OPT = getopt('', ['clean', 'limit::', 'offset::', 'instock']);
$CLEAN  = isset($OPT['clean']);
$LIMIT  = isset($OPT['limit'])  ? (int)$OPT['limit']  : 3;
$OFFSET = isset($OPT['offset']) ? (int)$OPT['offset'] : 0;
$INSTOCK = isset($OPT['instock']); // лише товари з ціною (в наличии)

$PARSER = dirname(__DIR__);
$OCDIR  = '/Applications/MAMP/htdocs/shokeru';
$LANGS  = [2, 3]; // uk-ua (фронт) + ru

require $PARSER . '/src/CsvHelper.php';

// --- конект ---
$cfg = require $OCDIR . '/app_config.php';
$d = $cfg['db']; $P = $d['prefix'];
$host = $d['hostname'] === 'localhost' ? '127.0.0.1' : $d['hostname'];
$db = new mysqli($host, $d['username'], $d['password'], $d['database'], (int)$d['port']);
if ($db->connect_errno) { fwrite(STDERR, "DB: {$db->connect_error}\n"); exit(1); }
$db->set_charset('utf8mb4');
function q($sql){ global $db; $r=$db->query($sql); if($r===false){ fwrite(STDERR,"SQL ERR: {$db->error}\n  $sql\n"); exit(1);} return $r; }
function esc($s){ global $db; return $db->real_escape_string($s); }

// --- stock_status_id з налаштувань ---
$r = q("SELECT value FROM {$P}setting WHERE `key`='config_stock_status_id' LIMIT 1");
$STOCK_IN = ($r && $x=$r->fetch_assoc()) ? (int)$x['value'] : 7;
$STOCK_OUT = 8;

// --- транслітерація для slug категорій ---
function translit($s){
    $s = mb_strtolower($s);
    $map = ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'zh','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'sch','ъ'=>'','ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ya','і'=>'i','ї'=>'yi','є'=>'ye','ґ'=>'g',' '=>'-'];
    $s = strtr($s, $map);
    $s = preg_replace('/[^a-z0-9\-]/', '', $s);
    $s = preg_replace('/-+/', '-', $s);
    return trim($s, '-');
}

$rows = CsvHelper::read($PARSER . '/data/products.csv');

// ===================== ОЧИЩЕННЯ =====================
if ($CLEAN) {
    echo "Очищення БД...\n";
    $tables = ['product','product_description','product_to_category','product_to_store','product_image',
        'product_attribute','product_related','product_special','product_discount','product_reward','product_to_layout',
        'category','category_description','category_to_store','category_path','category_to_layout','category_filter',
        'attribute','attribute_description','attribute_group','attribute_group_description'];
    q("SET FOREIGN_KEY_CHECKS=0");
    foreach ($tables as $t) q("TRUNCATE TABLE {$P}{$t}");
    q("DELETE FROM {$P}seo_url WHERE query LIKE 'product_id=%' OR query LIKE 'category_id=%'");
    q("SET FOREIGN_KEY_CHECKS=1");
    echo "  очищено товари, категорії, атрибути, seo_url.\n";
}

// ===================== АТРИБУТИ: група =====================
function attributeGroupId(){
    global $db,$P,$LANGS;
    $r=q("SELECT attribute_group_id FROM {$P}attribute_group LIMIT 1");
    if($r&&$x=$r->fetch_assoc()) return (int)$x['attribute_group_id'];
    q("INSERT INTO {$P}attribute_group SET sort_order=1");
    $gid=$db->insert_id;
    foreach($LANGS as $l) q("INSERT INTO {$P}attribute_group_description SET attribute_group_id=$gid, language_id=$l, name='".esc('Характеристики')."'");
    return $gid;
}
$ATTR_CACHE=[];
function attributeId($name){
    global $db,$P,$LANGS,$ATTR_CACHE,$AGID;
    $key=mb_strtolower(trim($name));
    if(isset($ATTR_CACHE[$key])) return $ATTR_CACHE[$key];
    $r=q("SELECT a.attribute_id FROM {$P}attribute a JOIN {$P}attribute_description ad ON a.attribute_id=ad.attribute_id WHERE ad.name='".esc($name)."' LIMIT 1");
    if($r&&$x=$r->fetch_assoc()){ return $ATTR_CACHE[$key]=(int)$x['attribute_id']; }
    q("INSERT INTO {$P}attribute SET attribute_group_id=$AGID, sort_order=0");
    $aid=$db->insert_id;
    foreach($LANGS as $l) q("INSERT INTO {$P}attribute_description SET attribute_id=$aid, language_id=$l, name='".esc($name)."'");
    return $ATTR_CACHE[$key]=$aid;
}

// ===================== КАТЕГОРІЇ =====================
// зберемо унікальні категорії+підкатегорії з УСІХ товарів
$CATMAP=[]; // "name|parentName" => category_id ; ключ топ = "name|"
function ensureCategory($name,$parentId,$parentKey){
    global $db,$P,$LANGS,$CATMAP;
    $name=trim($name); if($name==='') return 0;
    $key=$name.'|'.$parentKey;
    if(isset($CATMAP[$key])) return $CATMAP[$key];
    q("INSERT INTO {$P}category SET image='', parent_id=$parentId, top=".($parentId==0?1:0).", `column`=1, sort_order=0, status=1, date_added=NOW(), date_modified=NOW()");
    $cid=$db->insert_id;
    foreach($LANGS as $l) q("INSERT INTO {$P}category_description SET category_id=$cid, language_id=$l, name='".esc($name)."', description='', meta_title='".esc($name)."', meta_description='', meta_keyword=''");
    q("INSERT INTO {$P}category_to_store SET category_id=$cid, store_id=0");
    // path
    if($parentId) q("INSERT INTO {$P}category_path SET category_id=$cid, path_id=$parentId, level=0");
    q("INSERT INTO {$P}category_path SET category_id=$cid, path_id=$cid, level=".($parentId?1:0));
    // seo
    $slug=translit($name);
    $chk=q("SELECT seo_url_id FROM {$P}seo_url WHERE keyword='".esc($slug)."' LIMIT 1");
    if($chk&&$chk->num_rows) $slug.='-'.$cid;
    foreach($LANGS as $l) q("INSERT INTO {$P}seo_url SET store_id=0, language_id=$l, query='category_id=$cid', keyword='".esc($slug)."'");
    return $CATMAP[$key]=$cid;
}

if ($CLEAN || true) { // категорії будуємо завжди (idempotent через CATMAP лише в межах запуску — тому тільки при clean)
}

$AGID = attributeGroupId();

if ($CLEAN) {
    echo "Створення категорій...\n";
    foreach ($rows as $r) {
        $cat=trim($r['category']); $sub=trim($r['subcategory']);
        if($cat==='') continue;
        $cid=ensureCategory($cat,0,'');
        if($sub!=='') ensureCategory($sub,$cid,$cat);
    }
    echo "  категорій створено: ".count($CATMAP)."\n";
} else {
    // підвантажити наявні категорії у CATMAP (для продовження)
    $r=q("SELECT c.category_id,c.parent_id,cd.name FROM {$P}category c JOIN {$P}category_description cd ON c.category_id=cd.category_id AND cd.language_id=2");
    $byId=[]; while($x=$r->fetch_assoc()) $byId[$x['category_id']]=$x;
    foreach($byId as $id=>$x){
        $pk = $x['parent_id']!=0 && isset($byId[$x['parent_id']]) ? $byId[$x['parent_id']]['name'] : '';
        $CATMAP[$x['name'].'|'.$pk]=(int)$id;
    }
}

// ===================== ТОВАРИ =====================
$pool = $INSTOCK ? array_values(array_filter($rows, fn($r)=>trim($r['price'])!=='')) : $rows;
$slice = array_slice($pool, $OFFSET, $LIMIT>0 ? $LIMIT : null);
echo "Імпорт товарів: ".count($slice)." (offset=$OFFSET)\n";
$imp=0;
foreach ($slice as $r) {
    $name = trim($r['product_name']);
    $slug = preg_replace('#^https?://[^/]+/#','', $r['product_url']);
    $sku  = trim($r['sku']);
    $price = (float)preg_replace('/[^0-9.]/','', $r['price']);
    $inStock = (mb_stripos($r['availability'],'нет')===false && trim($r['availability'])!=='');
    $qty = $inStock ? 100 : 0;
    $stock = $inStock ? $STOCK_IN : $STOCK_OUT;

    // фото: копіюємо файли + визначаємо головне
    $images = (array)json_decode($r['images_json'], true);
    $mainImg = '';
    $copied = [];
    foreach ($images as $rel) {
        $src = $PARSER.'/data/images_original/'.$rel;
        if (!is_file($src)) continue;
        $dst = $OCDIR.'/'.$rel;
        if (!is_dir(dirname($dst))) @mkdir(dirname($dst), 0775, true);
        if (!is_file($dst)) @copy($src, $dst);
        $ocPath = preg_replace('#^image/#','', $rel); // catalog/...
        if ($mainImg==='') $mainImg=$ocPath; else $copied[]=$ocPath;
    }

    // oc_product
    q("INSERT INTO {$P}product SET model='".esc(mb_substr($name,0,64))."', sku='".esc($sku)."',
        upc='', ean='', jan='', isbn='', mpn='', location='', quantity=$qty,
        stock_status_id=$stock, image='".esc($mainImg)."', manufacturer_id=0, shipping=1, price='".number_format($price,4,'.','')."',
        points=0, tax_class_id=0, date_available=CURDATE(), weight=0, weight_class_id=1, length=0, width=0, height=0,
        length_class_id=1, subtract=1, minimum=1, sort_order=0, status=".($inStock?1:0).", viewed=0, date_added=NOW(), date_modified=NOW()");
    $pid = $db->insert_id;

    foreach ($LANGS as $l) {
        q("INSERT INTO {$P}product_description SET product_id=$pid, language_id=$l,
            name='".esc($name)."', description='".esc($r['full_description'])."', tag='',
            meta_title='".esc($r['meta_title']?:$name)."', meta_description='".esc($r['meta_description'])."',
            meta_keyword='".esc($r['meta_keywords'])."'");
    }
    q("INSERT INTO {$P}product_to_store SET product_id=$pid, store_id=0");

    // категорії
    $cat=trim($r['category']); $sub=trim($r['subcategory']);
    $catIds=[];
    if($cat!=='' && isset($CATMAP[$cat.'|'])) $catIds[]=$CATMAP[$cat.'|'];
    if($sub!=='' && isset($CATMAP[$sub.'|'.$cat])) $catIds[]=$CATMAP[$sub.'|'.$cat];
    foreach(array_unique($catIds) as $cid) q("INSERT INTO {$P}product_to_category SET product_id=$pid, category_id=$cid");

    // додаткові фото
    $so=0;
    foreach($copied as $img) q("INSERT INTO {$P}product_image SET product_id=$pid, image='".esc($img)."', sort_order=".(++$so));

    // характеристики -> атрибути
    foreach((array)json_decode($r['characteristics_json'],true) as $k=>$v){
        $k=trim($k); $v=trim($v); if($k===''||$v==='') continue;
        $aid=attributeId($k);
        foreach($LANGS as $l) q("INSERT INTO {$P}product_attribute SET product_id=$pid, attribute_id=$aid, language_id=$l, text='".esc($v)."'");
    }

    // seo_url
    $kw=$slug; $chk=q("SELECT seo_url_id FROM {$P}seo_url WHERE keyword='".esc($kw)."' LIMIT 1");
    if($chk&&$chk->num_rows) $kw.='-'.$pid;
    foreach($LANGS as $l) q("INSERT INTO {$P}seo_url SET store_id=0, language_id=$l, query='product_id=$pid', keyword='".esc($kw)."'");

    $imp++;
    echo "  [+] #$pid  $name  | sku=$sku | ".($inStock?"в наличии $price":"нет в наличии")." | фото:".(count($copied)+($mainImg?1:0))." | кат:".count($catIds)."\n";
}
echo "Готово. Імпортовано товарів: $imp\n";
