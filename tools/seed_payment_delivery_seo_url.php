<?php

require_once dirname(__DIR__) . '/config.php';

$slugs = array(
	'uk-ua' => 'oplata-i-dostavka',
	'ru-ru' => 'oplata-i-dostavka',
	'en-gb' => 'payment-and-delivery',
);

mysqli_report(MYSQLI_REPORT_OFF);

$hostname = DB_HOSTNAME;

if ($hostname === 'localhost' && (int)DB_PORT !== 3306) {
	$hostname = '127.0.0.1';
}

$mysqli = new mysqli($hostname, DB_USERNAME, DB_PASSWORD, DB_DATABASE, (int)DB_PORT);

if ($mysqli->connect_errno) {
	fwrite(STDERR, 'DB connection failed: ' . $mysqli->connect_error . PHP_EOL);
	exit(1);
}

$mysqli->set_charset('utf8');

$language_result = $mysqli->query("SELECT language_id, code FROM `" . DB_PREFIX . "language` WHERE code IN ('uk-ua', 'ru-ru', 'en-gb')");

if (!$language_result) {
	fwrite(STDERR, 'Failed to read languages: ' . $mysqli->error . PHP_EOL);
	exit(1);
}

$languages = array();

while ($row = $language_result->fetch_assoc()) {
	$languages[$row['code']] = (int)$row['language_id'];
}

$query = 'information/payment_delivery';

foreach ($slugs as $code => $slug) {
	if (empty($languages[$code])) {
		continue;
	}

	$language_id = (int)$languages[$code];
	$query_sql = $mysqli->real_escape_string($query);
	$slug_sql = $mysqli->real_escape_string($slug);

	$mysqli->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE `query` = '{$query_sql}' AND `store_id` = 0 AND `language_id` = {$language_id}");
	$mysqli->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE `keyword` = '{$slug_sql}' AND `store_id` = 0 AND `language_id` = {$language_id} AND `query` <> '{$query_sql}'");

	if (!$mysqli->query("INSERT INTO `" . DB_PREFIX . "seo_url` SET `store_id` = 0, `language_id` = {$language_id}, `query` = '{$query_sql}', `keyword` = '{$slug_sql}'")) {
		fwrite(STDERR, 'Failed to seed ' . $code . ': ' . $mysqli->error . PHP_EOL);
		exit(1);
	}
}

echo "Payment delivery SEO URLs seeded.\n";
