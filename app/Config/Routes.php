<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::index');
$routes->get('/logout', 'AuthController::logout');
$routes->post('/login', 'AuthController::login');
$routes->post('/registration', 'AuthController::registration');
$routes->post('/reminder', 'AuthController::reminder');
$routes->get('/pay/(:num)', 'AuthController::pay/$1');
//Admin
$routes->get('/admin/dashboard', 'AdminController::index',['filter' => 'auth']);

//Mater Events
$routes->get('/admin/masterevents', 'MasterEventController::index',['filter' => 'auth']);
$routes->get('/admin/masterevents/new', 'MasterEventController::new',['filter' => 'auth']);
$routes->post('/admin/masterevents', 'MasterEventController::create',['filter' => 'auth']);
$routes->get('/admin/masterevents/(:segment)/edit', 'MasterEventController::edit/$1',['filter' => 'auth']);
$routes->post('/admin/masterevents/(:segment)', 'MasterEventController::update/$1');
$routes->get('/admin/masterevents/(:segment)/delete', 'MasterEventController::delete/$1');
$routes->get('/admin/masterevents/(:segment)', 'MasterEventController::show/$1');

//Master Users
$routes->get('/admin/masterusers', 'MasterUserController::index',['filter' => 'auth']);
$routes->get('/admin/masterusers/new', 'MasterUserController::new',['filter' => 'auth']);
$routes->post('/admin/masterusers', 'MasterUserController::create',['filter' => 'auth']);
$routes->get('/admin/masterusers/(:segment)/edit', 'MasterUserController::edit/$1',['filter' => 'auth']);
$routes->post('/admin/masterusers/(:segment)', 'MasterUserController::update/$1');
$routes->get('/admin/masterusers/(:segment)/delete', 'MasterUserController::delete/$1');

//Events
$routes->get('/admin/events', 'EventController::index',['filter' => 'auth']);
$routes->get('/admin/events/new', 'EventController::new',['filter' => 'auth']);
$routes->post('/admin/events', 'EventController::create',['filter' => 'auth']);
$routes->get('/admin/events/(:segment)/edit', 'EventController::edit/$1',['filter' => 'auth']);
$routes->post('/admin/events/(:segment)', 'EventController::update/$1');
$routes->get('/admin/events/(:segment)/delete', 'EventController::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
