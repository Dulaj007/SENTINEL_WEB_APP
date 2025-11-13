<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Pages::view/contact');


$routes->get('(:any)', 'pages::view/$1'); 