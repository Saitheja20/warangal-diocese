<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('welcome', 'Home::welcome');
$routes->get('news-letters', 'Home::newsletters');
$routes->get('institutions', 'Home::institutions');