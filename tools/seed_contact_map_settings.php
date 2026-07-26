<?php

require_once dirname(__DIR__) . '/config.php';

$latitude = '';
$longitude = '';

foreach (array_slice($argv, 1) as $arg) {
	if (strpos($arg, '--latitude=') === 0) {
		$latitude = substr($arg, 11);
	}

	if (strpos($arg, '--longitude=') === 0) {
		$longitude = substr($arg, 12);
	}
}

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

$settings = array(
	'config_map_latitude'  => $latitude,
	'config_map_longitude' => $longitude,
);

foreach ($settings as $key => $value) {
	$key_sql = $mysqli->real_escape_string($key);
	$value_sql = $mysqli->real_escape_string($value);

	$result = $mysqli->query("SELECT `setting_id`, `value` FROM `" . DB_PREFIX . "setting` WHERE `store_id` = 0 AND `code` = 'config' AND `key` = '{$key_sql}' LIMIT 1");

	if (!$result) {
		fwrite(STDERR, 'Failed to seed ' . $key . ': ' . $mysqli->error . PHP_EOL);
		exit(1);
	}

	if ($row = $result->fetch_assoc()) {
		if ((string)$row['value'] === '' && $value !== '') {
			$setting_id = (int)$row['setting_id'];

			if (!$mysqli->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '{$value_sql}', `serialized` = 0 WHERE `setting_id` = {$setting_id}")) {
				fwrite(STDERR, 'Failed to update ' . $key . ': ' . $mysqli->error . PHP_EOL);
				exit(1);
			}
		}
	} elseif (!$mysqli->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = 0, `code` = 'config', `key` = '{$key_sql}', `value` = '{$value_sql}', `serialized` = 0")) {
		fwrite(STDERR, 'Failed to insert ' . $key . ': ' . $mysqli->error . PHP_EOL);
		exit(1);
	}
}

echo "Contact map settings seeded.\n";
