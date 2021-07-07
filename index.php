<?php

require_once __DIR__ . "/autoload.php";

$controller = $_GET['ctrl'] ?? 'Index';

$class = '\\App\Controller\\' . $controller;

if (!class_exists($class)) {
    die('class not exists');
}
try {
    $controller = new $class;
    $controller();
} catch (\Exception\Http404Exception $e) {
    http_response_code(404);
} catch (Throwable $e) {
    echo get_class($e);
    die('неизвестная ощибка');
}
