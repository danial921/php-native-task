<?php
$envFilePath = '../.env';

$lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    if (strpos($line, '=') !== false && strpos($line, '#') === false) {
        list($key, $value) = explode('=', $line, 2);

        $key = trim($key);
        $value = trim($value, "\"'");

        putenv("$key=$value");
    }
}
?>
