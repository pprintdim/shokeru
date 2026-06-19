<?php
/** Парсинг однієї сторінки товару у повний рядок products.csv. */
class ProductParser
{
    private array $cfg;
    private HttpClient $http;
    private Logger $log;

    /** Колонки products.csv (фіксований порядок). */
    public const COLUMNS = [
        'source', 'category', 'subcategory', 'product_name', 'sku',
        'price', 'old_price', 'currency', 'availability',
        'short_description', 'full_description', 'characteristics_json',
        'images_json', 'video', 'meta_title', 'meta_description', 'meta_keywords',
        'breadcrumbs', 'product_url', 'parsed_at', 'status', 'error',
    ];

    public function __construct(array $cfg, HttpClient $http, Logger $log)
    {
        $this->cfg = $cfg; $this->http = $http; $this->log = $log;
    }

    public function parse(string $url): array
    {
        $row = array_fill_keys(self::COLUMNS, '');
        $row['source']      = parse_url($this->cfg['base_url'], PHP_URL_HOST);
        $row['currency']    = 'UAH';
        $row['product_url'] = $url;
        $row['parsed_at']   = date('Y-m-d H:i:s');
        $row['status']      = 'ok';

        try {
            $html = $this->http->get($url);
            $dom  = new Dom($html);
            $s    = $this->cfg['selectors'];

            if (!$dom->has($s['is_product'])) {
                throw new RuntimeException('not a product page');
            }

            $row['product_name'] = $dom->text($s['name']);

            // breadcrumbs → категорія / підкатегорія
            $bc = [];
            foreach ($dom->nodes($s['breadcrumbs']) as $a) $bc[] = trim($a->textContent);
            $row['breadcrumbs'] = implode(' > ', $bc);
            $row['category']    = $bc[1] ?? '';
            $row['subcategory'] = count($bc) >= 3 ? $bc[2] : '';

            // ціна / валюта / стара ціна
            $row['price']    = $dom->attr($s['price']);
            $row['currency'] = $dom->attr($s['currency']) ?: 'UAH';
            $row['old_price'] = preg_replace('/\D/', '', $dom->text($s['old_price']));

            // наявність
            $av = $dom->text($s['availability']);
            $row['availability'] = $av !== '' ? $av : $dom->text($s['availability_alt']);

            // meta
            $row['meta_title']       = $dom->text($s['meta_title']);
            $row['meta_description'] = $dom->attr($s['meta_description']);
            $row['meta_keywords']    = $dom->attr($s['meta_keywords']);
            $row['short_description'] = $row['meta_description'];

            // повний опис
            $fd = $dom->nodes($s['full_description']);
            $row['full_description'] = $fd && $fd->length
                ? trim(preg_replace('/\s+/', ' ', $fd->item(0)->textContent)) : '';

            // характеристики
            $chars = [];
            foreach ($dom->nodes($s['spec_rows']) as $node) {
                $spans = $node->getElementsByTagName('span');
                if ($spans->length < 2) continue;
                $k = rtrim(trim($spans->item(0)->textContent), ': ');
                $v = trim($spans->item(1)->textContent);
                if ($k === '') continue;
                $chars[$k] = $v;
                // артикул/код, якщо є серед характеристик
                if ($row['sku'] === '' && preg_match('/артикул|код товара|модель/iu', $k)) {
                    $row['sku'] = $v;
                }
            }
            $row['characteristics_json'] = json_encode($chars, JSON_UNESCAPED_UNICODE);

            // фото: галерея містить thumb + full; залишаємо лише повнорозмірні (1400x1300)
            $full = $other = [];
            foreach ($dom->nodes($s['images']) as $h) {
                $u = $this->abs(trim($h->nodeValue));
                if ($u === '') continue;
                if (str_contains($u, '1400x1300')) $full[$u] = true;
                else $other[$u] = true;
            }
            $imgs = array_keys($full ?: $other); // якщо повних нема — беремо що є
            $row['images_json'] = json_encode($imgs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

            // SKU з донора = внутрішній OpenCart product_id (донор не публікує артикул окремо)
            $pid = $dom->attr('//input[@name="product_id"]/@value');
            if ($pid !== '') $row['sku'] = $pid;

            // відео: YouTube-embed у контенті товару (виключаємо посилання на канал у футері)
            if (preg_match('#youtube\.com/embed/([A-Za-z0-9_-]+)#', $html, $vm)) {
                $row['video'] = 'https://www.youtube.com/embed/' . $vm[1];
            } elseif (preg_match('#youtu\.be/([A-Za-z0-9_-]+)#', $html, $vm)) {
                $row['video'] = 'https://www.youtube.com/embed/' . $vm[1];
            }

            // keywords: якщо на сайті немає — згенерувати
            if ($row['meta_keywords'] === '' && !empty($this->cfg['generate_keywords'])) {
                $row['meta_keywords'] = $this->buildKeywords($row, $chars);
            }

        } catch (Throwable $e) {
            $row['status'] = 'failed';
            $row['error']  = $e->getMessage();
        }
        return $row;
    }

    /** Згенерувати SEO ключові слова з назви + категорії + бренду + країни. */
    private function buildKeywords(array $row, array $chars): string
    {
        $stop = ['для','и','с','в','на','от','до','шт','грн','мм','шокера','электрошокера'];
        $name = mb_strtolower($row['product_name']);
        $kws  = [$name];

        foreach (preg_split('/[\s,()\/]+/u', $name, -1, PREG_SPLIT_NO_EMPTY) as $w) {
            if (mb_strlen($w) > 2 && !in_array($w, $stop, true)) $kws[] = $w;
        }
        foreach (['Бренд', 'Страна производитель', 'Тип', 'Модель'] as $key) {
            foreach ($chars as $ck => $cv) {
                if (mb_stripos($ck, $key) !== false && trim($cv) !== '') $kws[] = mb_strtolower(trim($cv));
            }
        }
        if ($row['category'])    $kws[] = mb_strtolower($row['category']);
        if ($row['subcategory']) $kws[] = mb_strtolower($row['subcategory']);
        $kws[] = 'купить ' . mb_strtolower(preg_replace('/^(Шокер|Электрошокер)\s+/iu', '', $row['product_name']));

        $kws = array_values(array_unique(array_filter(array_map('trim', $kws))));
        return implode(', ', array_slice($kws, 0, 15));
    }

    private function abs(string $u): string
    {
        if ($u === '' || preg_match('#^https?://#', $u)) return $u;
        return rtrim($this->cfg['base_url'], '/') . '/' . ltrim($u, '/');
    }
}
