<?php
/**
 * Повторний парсинг товарів зі статусом failed у products.csv.
 * Запуск:  php retry_failed.php
 */
require __DIR__ . '/src/bootstrap.php';

$log->info('=== Повтор невдалих товарів ===');

$products = CsvHelper::read($cfg['paths']['products']);
if (!$products) { $log->error('products.csv порожній'); exit(1); }

$failed = array_values(array_filter($products, fn($r) => ($r['status'] ?? '') === 'failed'));
if (!$failed) { $log->info('Невдалих товарів немає 🎉'); exit(0); }

$log->info('Невдалих: ' . count($failed));

$parser  = new ProductParser($cfg, $http, $log);
$history = new PriceHistory($cfg['paths']['price_history']);
$byUrl   = CsvHelper::indexBy($products, 'product_url');
$fixed = 0;

foreach ($failed as $f) {
    $url = $f['product_url'];
    $log->info("Повтор: $url");
    $row = $parser->parse($url);

    if ($row['status'] === 'ok' && isset($byUrl[$url])) {
        $history->record($url, $row['product_name'], $byUrl[$url]['price'] ?? '', $row['price'], $row['currency']);
    }
    $products = CsvHelper::upsert($products, $row, 'product_url');
    if ($row['status'] === 'ok') $fixed++;

    CsvHelper::write($cfg['paths']['products'], $products, ProductParser::COLUMNS);
    $history->save();
}

$log->info("Готово. Виправлено: $fixed / " . count($failed));
