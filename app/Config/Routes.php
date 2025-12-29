<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
<<<<<<< HEAD
$routes->get('/contact', 'contact::index');
=======
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/hello', 'HelloController::index');
>>>>>>> 642315af09bcf15252308e943032df6621d64026
