<?php

require_once __DIR__ . "/autoload.php";

$controller = $_GET['ctrl'] ?? 'Index';

$class = '\\App\Controller\\' . $controller;
if (class_exists($class)) {
    $controller = new $class;
    $controller();
} else {
    die('Страница не найдена');
}
