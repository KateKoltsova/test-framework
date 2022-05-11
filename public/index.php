<?php

ini_set('display_errors', '1');

require_once __DIR__ . '/../vendor/autoload.php';

$config = include __DIR__ . '/../config/main.php';

$app = Aigletter\Framework\Application::getApp($config);
try {
    $app->run();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

