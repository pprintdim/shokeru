<?php
/** Спільний бутстрап: конфіг + підключення класів + логер. */
error_reporting(E_ALL & ~E_DEPRECATED);
mb_internal_encoding('UTF-8');

$cfg = require __DIR__ . '/../config.php';

require __DIR__ . '/Logger.php';
require __DIR__ . '/CsvHelper.php';
require __DIR__ . '/Dom.php';
require __DIR__ . '/HttpClient.php';
require __DIR__ . '/CategoryParser.php';
require __DIR__ . '/ProductUrlParser.php';
require __DIR__ . '/ProductParser.php';
require __DIR__ . '/PriceHistory.php';

$log  = new Logger($cfg['paths']['log']);
$http = new HttpClient($cfg, $log);
