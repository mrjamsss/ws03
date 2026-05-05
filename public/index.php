<?php

require '../helpers.php';
require basePath('Router.php');

$router = new Router();

require basePath('Routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$path = normaliseUri($uri);

$router->route($path, $method);
