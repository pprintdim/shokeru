<?php
/**
 * Крок 1. Збір категорій → data/categories.csv
 * Запуск:  php parse_categories.php
 */
require __DIR__ . '/src/bootstrap.php';

$log->info('=== Збір категорій ===');

$parser = new CategoryParser($cfg, $http, $log);
$rows   = $parser->parse();

CsvHelper::write($cfg['paths']['categories'], $rows,
    ['category_name', 'category_url', 'status', 'error']);

$log->info('Готово. Категорій: ' . count($rows) . ' → ' . $cfg['paths']['categories']);
