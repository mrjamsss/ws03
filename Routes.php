<?php

/**
 * Application Routes
 *
 * Register all application routes here using the $router instance.
 * The $router variable is injected by public/index.php before this file is required.
 */

$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
