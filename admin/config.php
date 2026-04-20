<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8888/shokeru/admin/');
define('HTTP_CATALOG', 'http://localhost:8888/shokeru/');

// HTTPS (локально просто HTTP)
define('HTTPS_SERVER', 'http://localhost:8888/shokeru/admin/');
define('HTTPS_CATALOG', 'http://localhost:8888/shokeru/');

// DIR
define('DIR_APPLICATION', '/Applications/MAMP/htdocs/shokeru/admin/');
define('DIR_SYSTEM', '/Applications/MAMP/htdocs/shokeru/system/');
define('DIR_IMAGE', '/Applications/MAMP/htdocs/shokeru/image/');

// Якщо у тебе storage в корені
define('DIR_STORAGE', '/Applications/MAMP/htdocs/shokeru/system/storage/');

define('DIR_CATALOG', '/Applications/MAMP/htdocs/shokeru/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root'); // дефолт MAMP
define('DB_DATABASE', 'shokeru');
define('DB_PORT', '8889'); // MAMP MySQL порт за замовчуванням
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');