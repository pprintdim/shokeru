<?php
/**
 * Крок 2. Збір URL товарів з усіх категорій → data/product_urls.csv
 * Запуск:  php parse_product_urls.php
 *
 * Відновлення: вже зібрані product_url не дублюються; категорії,
 * по яких уже є товари, пропускаються (щоб продовжити після зупинки).
 */
require __DIR__ . '/src/bootstrap.php';

$log->info('=== Збір URL товарів ===');

$categories = CsvHelper::read($cfg['paths']['categories']);
if (!$categories) {
    $log->error('Спочатку запусти parse_categories.php');
    exit(1);
}

// уже зібране (для відновлення + дедуплікації)
$existing   = CsvHelper::read($cfg['paths']['product_urls']);
$haveUrls   = array_flip(array_column($existing, 'product_url'));
$doneCats   = array_flip(array_column($existing, 'category_name'));

$parser = new ProductUrlParser($cfg, $http, $log);
$all    = $existing;

foreach ($categories as $cat) {
    if (($cat['status'] ?? '') !== 'ok' || $cat['category_url'] === '') continue;
    if (isset($doneCats[$cat['category_name']])) {
        $log->info("Пропуск (вже зібрано): {$cat['category_name']}");
        continue;
    }
    $log->info("Категорія: {$cat['category_name']}");
    foreach ($parser->parseCategory($cat['category_url'], $cat['category_name']) as $row) {
        if ($row['status'] !== 'failed' && isset($haveUrls[$row['product_url']])) continue;
        $haveUrls[$row['product_url']] = true;
        $all[] = $row;
    }
    // зберігаємо після кожної категорії — щоб не втратити прогрес
    CsvHelper::write($cfg['paths']['product_urls'], $all,
        ['product_url', 'category_name', 'status', 'error']);
}

$log->info('Готово. URL товарів: ' . count($all) . ' → ' . $cfg['paths']['product_urls']);
