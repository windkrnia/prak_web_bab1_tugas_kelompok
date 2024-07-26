<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PasienController::index');
$routes->get('/screen', 'PasienController::index'); // Add this line
$routes->get('/screen/create', 'PasienController::create');
$routes->post('/screen/store', 'PasienController::store');
$routes->get('/screen/edit/(:num)', 'PasienController::edit/$1');
$routes->post('/screen/update/(:num)', 'PasienController::update/$1');
$routes->get('/screen/delete/(:num)', 'PasienController::delete/$1');
