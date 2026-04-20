<?php
// list-html.php — показує всі .html файли в поточній папці

$dir = __DIR__;
$files = glob($dir . '/*.html');

header('Content-Type: text/html; charset=utf-8');

echo '<!doctype html><html><head><meta charset="utf-8">';
echo '<title>HTML files</title>';
echo '<style>
    body{font-family:Arial,sans-serif;padding:20px;}
    ul{line-height:1.8;}
    a{text-decoration:none;}
    a:hover{text-decoration:underline;}
    small{color:#666;}
</style>';
echo '</head><body>';

echo '<h1>HTML files in: <small>' . htmlspecialchars(basename($dir)) . '</small></h1>';

if (!$files) {
    echo '<p>No .html files found.</p>';
} else {
    // Сортування по імені файлу
    natsort($files);

    echo '<ul>';
    foreach ($files as $path) {
        $name = basename($path);
        $url  = rawurlencode($name);

        echo '<li><a target="_blank" href="' . $url . '">' . htmlspecialchars($name) . '</a></li>';
    }
    echo '</ul>';
}

echo '</body></html>';
