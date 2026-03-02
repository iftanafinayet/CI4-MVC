<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

service('auth') -> routes($routes);
$routes->get('/', function () {
    return redirect()->to('/main');
});


// Main Routes
$routes->get('/main', 'Main::index');
$routes->get('/resume', 'Main::Resume');
$routes->get('/project', 'Main::Project');
$routes->get('/contact', 'Main::Contact');

// Biodata
$routes->get('/biodata', 'biodata::index');

// Contact Controller Routes
$routes->get('/contact', 'ContactController::index');
$routes->post('/contact/save', 'ContactController::save');
$routes->delete('/contact/delete/(:num)', 'ContactController::delete/$1');
$routes->get('/contact/list', 'ContactController::index');
$routes->get('/contact/edit/(:num)', 'ContactController::edit/$1');
$routes->post('/contact/update/(:num)', 'ContactController::update/$1');
$routes->get('/contact/view/(:num)', 'ContactController::view/$1');

// Register Routes - Memperbaiki Case Sensitivity untuk mencegah 404
$routes->get('Register', 'RegisterController::index');

service('auth')->routes($routes);
$routes->post('Register/save', 'RegisterController::save');