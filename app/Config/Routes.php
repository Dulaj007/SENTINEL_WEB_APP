<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('/', 'Pages::view/contact');



$routes->get('services', 'Pages::view/services');
$routes->get('about', 'Pages::view/about');
$routes->get('products', 'Pages::view/products');
$routes->get('contact', 'Pages::view/contact');