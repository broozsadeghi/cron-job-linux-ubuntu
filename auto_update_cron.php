<?php

function env($key, $default = null) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2) + [null, null];
        if ($name === $key) return trim($value);
    }
    return $default;
}

while (true) {
    $url = env('APP_PUBLIC_BACK') . '/api/v2/update';
    $response = @file_get_contents($url);
    echo "Updated at " . date('H:i:s') . "\n";
    sleep(1);
}
