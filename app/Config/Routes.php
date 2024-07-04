<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->post('/detail', 'Home::detail');
$routes->get('/test', 'Home::test');
$routes->setAutoRoute(true);
