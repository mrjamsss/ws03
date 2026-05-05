<?php

loadView('listings/show');

$router->get('listing', 'controllers/listings/show.php');
