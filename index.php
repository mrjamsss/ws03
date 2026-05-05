<?php

require __DIR__ . '/helpers.php';

$uri = $_SERVER['REQUEST_URI'];
$path = normaliseUri($uri);

// Serve static files from public folder
if ($path !== '/' && file_exists(__DIR__ . '/public' . $path)) {
    if (preg_match('/\.css$/', $path)) {
        header('Content-Type: text/css');
    } elseif (preg_match('/\.js$/', $path)) {
        header('Content-Type: application/javascript');
    } elseif (preg_match('/\.jpg$|\.jpeg$|\.png$|\.gif$|\.svg$/', $path)) {
        header('Content-Type: image/' . pathinfo($path, PATHINFO_EXTENSION));
    }
    readfile(__DIR__ . '/public' . $path);
    exit;
}

require basePath('Router.php');

$router = new Router();

require basePath('Routes.php');

require basePath('Database.php');

$method = $_SERVER['REQUEST_METHOD'];

$router->route($path, $method);
