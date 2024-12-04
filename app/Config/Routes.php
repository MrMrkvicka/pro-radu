<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index'); 
$routes->get("karty","Main::karty");
$routes->get("home","Main::home");
$routes->get("carousel","Main::carousel");
$routes->get("zapasy","Main::zapasy");
$routes->get("database","Main::database");
$routes->get("polaci","Main::polaci");

