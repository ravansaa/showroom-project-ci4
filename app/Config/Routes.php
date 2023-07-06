<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Homepage::index');
$routes->get('automobile', 'AutomobileController::index');
$routes->get('automobile/(:num)', 'AutomobileController::showCar/$1');
$routes->get('motorcycle', 'Home::motorcycle');
$routes->get('motor1', 'DetailController::show');
$routes->get('motor2', 'DetailController::showMotor2');
$routes->get('motor3', 'DetailController::showMotor3');
$routes->get('motor4', 'DetailController::showMotor4');
$routes->post('processForm', 'FormController::processForm');
$routes->get('success', 'FormController::success');
$routes->get('mobil1', 'MobilController::mobil1');
$routes->get('mobil2', 'MobilController::mobil2');
$routes->get('mobil3', 'MobilController::mobil3');
$routes->get('mobil4', 'MobilController::mobil4');





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
