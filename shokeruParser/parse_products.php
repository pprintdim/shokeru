<?php
/**
 * Крок 3. Парсинг товарів → data/products.csv (+ price_history.csv)
 * Запуск:  php parse_products.php
 *
 * - Оновлює наявний рядок за product_url (без дублів).
 * - Якщо ціна змінилась — пише у price_history.csv.
 * - Відновлення: товари зі статусом ok пропускаються (крім --all).
 *     php parse_products.php --all   # перепарсити все заново
 */
require __DIR__ . '/src/bootstrap.php';

$reparseAll = in_array('--all', $argv, true);

$log->info('=== Парсинг товарів ===' . ($reparseAll ? ' (перепарс усього)' : ''));

$urls = CsvHelper::read($cfg['paths']['product_urls']);
if (!$urls) {
    $log->error('Спочатку запусти parse_product_urls.php');
    exit(1);
}

$products = CsvHelper::read($cfg['paths']['products']);
$byUrl    = CsvHelper::indexBy($products, 'product_url');

$parser  = new ProductParser($cfg, $http, $log);
$history = new PriceHistory($cfg['paths']['price_history']);

$ok = $fail = $skip = $priceChanges = 0;
$i = 0; $total = count($urls);

foreach ($urls as $u) {
    $i++;
    $url = $u['product_url'] ?? '';
    if ($url === '') continue;

    // відновлення: пропускаємо вже успішно спарсені
    if (!$reparseAll && isset($byUrl[$url]) && ($byUrl[$url]['status'] ?? '') === 'ok') {
        $skip++;
        continue;
    }

    $log->info("[$i/$total] $url");
    $row = $parser->parse($url);

    // зміна ціни
    if ($row['status'] === 'ok' && isset($byUrl[$url])) {
        if ($history->record($url, $row['product_name'],
                $byUrl[$url]['price'] ?? '', $row['price'], $row['currency'])) {
            $priceChanges++;
            $log->info("  ціна: {$byUrl[$url]['price']} → {$row['price']} {$row['currency']}");
        }
    }

    // upsert без дублів
    $products = CsvHelper::upsert($products, $row, 'product_url');
    $byUrl[$url] = $row;
    $row['status'] === 'ok' ? $ok++ : $fail++;

    // зберігаємо інкрементально (можна перервати будь-коли)
    CsvHelper::write($cfg['paths']['products'], $products, ProductParser::COLUMNS);
    $history->save();
}

$log->info("Готово. ok=$ok failed=$fail пропущено=$skip змін_ціни=$priceChanges");
$log->info('Файл: ' . $cfg['paths']['products']);
