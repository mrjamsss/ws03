<?php

require '../helpers.php';
require basePath('Router.php');

// Instantiate the router
$router = new Router();

// Register all application routes
require basePath('Routes.php');

// Normalise the URI (strips subdirectory prefix, query string, etc.)
$uri    = normaliseUri($_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];

// Dispatch the request
$router->route($uri, $method);
