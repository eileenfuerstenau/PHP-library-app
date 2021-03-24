<?php

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ERROR);
ini_set('display_errors', 1);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$routes = require __DIR__ . '/../config/routes.php';
$response = '';


foreach ($routes as $route) {
    if ($method === $route[0] && $uri === $route[1]) {
        $response = call_user_func($route[2]);
    }
};

if (!$response) {
    http_response_code(404);
    $response = '404 - Not Found';
};

echo $response;