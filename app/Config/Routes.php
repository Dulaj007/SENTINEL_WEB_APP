<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('/', 'Pages::view/portfolio');


$routes->get('(:any)', 'pages::view/$1'); 