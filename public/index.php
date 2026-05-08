<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../helpers.php';
require basePath('Router.php');
require basePath('Database.php');

$router = new Router();

$routes = require basePath('Routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
