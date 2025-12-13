<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'contact::index');
$routes->get('/reservation', 'reservation::index');
$routes->get('/menu', 'menu::index');



