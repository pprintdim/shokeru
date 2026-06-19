<?php
/**
 * Переклад каталогу в БД: lang 1 (EN) + lang 2 (UA). RU (lang 3) лишається.
 * Пише: product_description, product_attribute, category_description, attribute_description.
 * Запуск: php translate_catalog.php
 */
error_reporting(E_ALL & ~E_DEPRECATED);
$DIR = __DIR__;
require $DIR.'/i18n_dict.php';
require $DIR.'/../src/CsvHelper.php';

$cfg = require '/Applications/MAMP/htdocs/shokeru/app_config.php';
$d=$cfg['db']; $P=$d['prefix'];
$db=new mysqli('127.0.0.1',$d['username'],$d['password'],$d['database'],(int)$d['port']);
if($db->connect_errno){fwrite(STDERR,$db->connect_error);exit(1);}
$db->set_charset('utf8mb4');
function esc($s){global $db;return $db->real_escape_string($s);}
$LANG=['ua'=>2,'en'=>1]; // куди пишемо

/** Багатомовний опис із характеристик. */
function genDesc(array $r, string $lang): string {
    $name = trName($r['product_name'], $lang);
    $c = (array)json_decode($r['characteristics_json'], true);
    $g = fn($keys)=>(function($c,$keys){foreach($keys as $k)foreach($c as $ck=>$cv)if(mb_stripos($ck,$k)!==false&&trim($cv)!=='')return trim($cv);return '';})($c,$keys);
    $brand=$g(['Бренд','Brand']); $country=$g(['Страна производитель']); $year=preg_replace('/\D/','',$g(['Год выпуска']));
    $volt=trVal($g(['Напряжение']),$lang); $power=trVal($g(['Мощность']),$lang); $mat=$g(['Материал корпуса']);
    $matT=trVal($mat,$lang); $water=$g(['Влагозащита']); $src=trVal($g(['Источник питания']),$lang);
    $cap=trVal($g(['Емкость аккумулятора']),$lang); $dims=$g(['Габаритные размеры']); $weight=trVal($g(['Вес']),$lang);
    $warr=trVal($g(['Гарантия']),$lang); $dog=$g(['Против собак']); $light=$g(['Функция фонарика']);
    $isAcc = mb_stripos($r['category'],'ксессуар')!==false || preg_match('/аккумулятор|картридж|шнур/iu',$r['product_name']);

    $T = [
      'ua'=>[
        'intro'=>"«%N%» — надійний засіб самооборони%YR%%MK%.",
        'acc'=>"«%N%» — оригінальне комплектуюче для стабільної роботи вашого пристрою.",
        'power'=>"Напруга розряду — %V%, чого достатньо, щоб миттєво зупинити нападника.",
        'pw'=>"Корисна потужність — %P%.",
        'build'=>"Корпус виконаний з матеріалу «%M%», зручно лежить у руці.",
        'water'=>"Передбачено захист від вологи.",
        'batt'=>"Джерело живлення — %S%%CAP%.",
        'size'=>"Габарити — %D%, вага — %W%. Прилад компактний.",
        'flash'=>"Вбудований ліхтарик стане в пригоді в темну пору доби.",
        'dog'=>"Модель ефективна проти агресивних собак.",
        'specs'=>'Характеристики',
        'kit'=>'Комплект постачання','kitlist'=>['Електрошокер','Чохол','Зарядний пристрій','Інструкція','Гарантійний талон','Подарункова упаковка'],
        'cta'=>"Замовляйте «%N%» з доставкою по всій Україні.",
        'made'=>"Виробник — %MK%.",'kitacc'=>['%N%','Упаковка','Гарантійний талон'],
      ],
      'en'=>[
        'intro'=>"%N% is a reliable self-defense device%YR%%MK%.",
        'acc'=>"%N% is an original component for stable operation of your device.",
        'power'=>"Discharge voltage is %V% — enough to instantly stop an attacker.",
        'pw'=>"Effective power — %P%.",
        'build'=>"The body is made of %M% and fits comfortably in the hand.",
        'water'=>"Water protection is provided.",
        'batt'=>"Power source — %S%%CAP%.",
        'size'=>"Dimensions — %D%, weight — %W%. The device is compact.",
        'flash'=>"A built-in flashlight is handy at night.",
        'dog'=>"The model is effective against aggressive dogs.",
        'specs'=>'Specifications',
        'kit'=>'Package includes','kitlist'=>['Stun gun','Holster','Charger','User manual','Warranty card','Gift box'],
        'cta'=>"Order %N% with delivery across Ukraine.",
        'made'=>"Manufactured by %MK%.",'kitacc'=>['%N%','Packaging','Warranty card'],
      ],
    ][$lang];

    $mk = $brand ? ('«'.$brand.'»') : ($country ? trVal($country,$lang) : '');
    $yr = $year ? ($lang==='ua' ? " ($year р.)" : " ($year)") : '';
    $P=[];
    if($isAcc){
        $P[]='<p>'.str_replace('%N%',$name,$T['acc']).'</p>';
    } else {
        $intro=str_replace(['%N%','%YR%','%MK%'],[$name,$yr,$mk?(($lang==='ua'?' від ':' by ').$mk):''],$T['intro']);
        $P[]="<p>$intro</p>";
        $b=[];
        if($volt)$b[]=str_replace('%V%',$volt,$T['power']);
        if($power)$b[]=str_replace('%P%',$power,$T['pw']);
        if($matT)$b[]=str_replace('%M%',$matT,$T['build']);
        if(mb_stripos($water,'есть')!==false||mb_stripos($water,'є')!==false)$b[]=$T['water'];
        if($src)$b[]=str_replace(['%S%','%CAP%'],[$src,$cap?($lang==='ua'?" ємністю $cap":" with $cap capacity"):''],$T['batt']);
        if($dims||$weight)$b[]=str_replace(['%D%','%W%'],[$dims,$weight],$T['size']);
        if($light)$b[]=$T['flash'];
        if(mb_stripos($dog,'эффек')!==false||mb_stripos($dog,'ефек')!==false)$b[]=$T['dog'];
        if($b)$P[]='<p>'.implode(' ',$b).'</p>';
    }
    // характеристики
    $li=[];
    foreach($c as $k=>$v){ $k=trim($k);$v=trim($v); if($k===''||$v==='')continue;
        $li[]='<li><strong>'.htmlspecialchars(trKey($k,$lang)).':</strong> '.htmlspecialchars(trVal($v,$lang)).'</li>'; }
    if($li){$P[]='<h4>'.$T['specs'].' «'.$name.'»</h4>';$P[]='<ul>'.implode('',array_slice($li,0,14)).'</ul>';}
    // комплект
    $kit = $isAcc ? array_map(fn($x)=>str_replace('%N%',$name,$x),$T['kitacc']) : $T['kitlist'];
    $P[]='<h4>'.$T['kit'].'</h4><ul>'.implode('',array_map(fn($x)=>"<li>$x</li>",$kit)).'</ul>';
    $P[]='<p>'.str_replace('%N%',$name,$T['cta']).'</p>';
    return implode("\n",$P);
}

$rows = CsvHelper::read($DIR.'/../data/products.csv');

// ---------- КАТЕГОРІЇ ----------
$catCount=0;
$res=$db->query("SELECT category_id FROM {$P}category");
$catIds=[]; while($x=$res->fetch_assoc())$catIds[]=$x['category_id'];
foreach($catIds as $cid){
    // беремо RU-назву (lang 3) як джерело
    $r=$db->query("SELECT name FROM {$P}category_description WHERE category_id=$cid AND language_id=3 LIMIT 1");
    if(!$r||!$r->num_rows)continue; $ru=$r->fetch_assoc()['name'];
    foreach($LANG as $l=>$lid){
        $nm=esc(trCat($ru,$l));
        $db->query("DELETE FROM {$P}category_description WHERE category_id=$cid AND language_id=$lid");
        $db->query("INSERT INTO {$P}category_description SET category_id=$cid, language_id=$lid, name='$nm', description='', meta_title='$nm', meta_description='', meta_keyword=''");
    }
    $catCount++;
}

// ---------- АТРИБУТИ (назви) ----------
$attrCount=0;
$res=$db->query("SELECT a.attribute_id, ad.name FROM {$P}attribute a JOIN {$P}attribute_description ad ON a.attribute_id=ad.attribute_id AND ad.language_id=3");
$attrs=[]; while($x=$res->fetch_assoc())$attrs[$x['attribute_id']]=$x['name'];
foreach($attrs as $aid=>$ru){
    foreach($LANG as $l=>$lid){
        $nm=esc(trKey($ru,$l));
        $db->query("DELETE FROM {$P}attribute_description WHERE attribute_id=$aid AND language_id=$lid");
        $db->query("INSERT INTO {$P}attribute_description SET attribute_id=$aid, language_id=$lid, name='$nm'");
    }
    $attrCount++;
}

// ---------- ТОВАРИ (опис + назва + meta + значення атрибутів) ----------
$prodCount=0;$attrValCount=0;
foreach($rows as $r){
    $sku=esc(trim($r['sku'])); if($sku==='')continue;
    $q=$db->query("SELECT product_id FROM {$P}product WHERE sku='$sku' LIMIT 1");
    if(!$q||!$q->num_rows)continue; $pid=(int)$q->fetch_assoc()['product_id'];

    foreach($LANG as $l=>$lid){
        $nm=trName($r['product_name'],$l);
        $desc=genDesc($r,$l);
        $mt = $nm.($l==='ua'?' — купити в Україні':' — buy in Ukraine');
        $kw = esc(mb_strtolower($nm));
        $db->query("DELETE FROM {$P}product_description WHERE product_id=$pid AND language_id=$lid");
        $db->query("INSERT INTO {$P}product_description SET product_id=$pid, language_id=$lid,
            name='".esc($nm)."', description='".esc($desc)."', tag='',
            meta_title='".esc($mt)."', meta_description='".esc(mb_substr(strip_tags($desc),0,250))."', meta_keyword='$kw'");
        // значення атрибутів цією мовою
        $db->query("DELETE FROM {$P}product_attribute WHERE product_id=$pid AND language_id=$lid");
        foreach((array)json_decode($r['characteristics_json'],true) as $k=>$v){
            $k=trim($k);$v=trim($v); if($k===''||$v==='')continue;
            // знайти attribute_id за RU-назвою
            $ar=$db->query("SELECT a.attribute_id FROM {$P}attribute a JOIN {$P}attribute_description ad ON a.attribute_id=ad.attribute_id AND ad.language_id=3 WHERE ad.name='".esc($k)."' LIMIT 1");
            if(!$ar||!$ar->num_rows)continue; $aid=(int)$ar->fetch_assoc()['attribute_id'];
            $db->query("INSERT INTO {$P}product_attribute SET product_id=$pid, attribute_id=$aid, language_id=$lid, text='".esc(trVal($v,$l))."'");
            $attrValCount++;
        }
    }
    $prodCount++;
}

echo "Категорій: $catCount | атрибутів: $attrCount | товарів: $prodCount | значень атрибутів: $attrValCount\n";
echo "Записано мови: UA(2) + EN(1). RU(3) без змін.\n";
