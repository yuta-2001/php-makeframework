<?php

/**
 * Front Controller
 * 
 * PHP versino 5.6
 */

// echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '" ';

/**
 * Router
 */
require '../Core/Router.php';

$router = new Router();

echo get_class($router);