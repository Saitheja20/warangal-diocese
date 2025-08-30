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

$routes->get('Photo_Gallery', 'Home::Photo_Gallery');

$routes->get('gallery/gallery_1', 'Home::gallery_1');

$routes->get('Video_gallery', 'Home::Video_gallery');


$routes->get('song_gallery', 'Home::song_gallery');

$routes->get('education', 'Home::education');

$routes->get('birthday_calender', 'Home::birthday_calender');



$routes->get('Seminarians', 'Home::Seminarians');



$routes->get('Marriage_tribunal', 'Home::Marriage_tribunal');

$routes->get('College_Consultors', 'Home::College_Consultors');



