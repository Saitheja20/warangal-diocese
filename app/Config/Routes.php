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
$routes->get('commissions', 'Home::commissions');
$routes->get('institution_men', 'Home::institution_men');
$routes->get('institution_women', 'Home::institution_women');
$routes->get('Institute_Seminaries', 'Home::Institute_Seminaries');
$routes->get('diocese_curia', 'Home::diocese_curia');
$routes->get('Marriagetribunal', 'Home::Marriagetribunal');


