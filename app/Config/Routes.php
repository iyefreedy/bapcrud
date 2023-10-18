<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

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
$routes->get('/', 'Home::index');

$routes->get('/news', 'Content::index');
$routes->get('/about', 'Page::about');
$routes->get('/testimonial', 'Page::testimonial');
$routes->get('/service', 'Page::service');
$routes->get('/career', 'Page::career');
$routes->get('/policy', 'Page::policy');
$routes->get('/recruitment', 'Recruitment::index');

$routes->get('/admin', 'Admin::index');
$routes->get('/dashboard', 'Admin::dashboard');
$routes->get('/equipmentlist', 'Page::equipmentlist');
$routes->get('/katalog', 'Katalog::index');

$routes->get('/customer', 'Customer::index');
$routes->get('/content', 'News::index');
$routes->get('/news/addcontent', 'News::create');
$routes->post('/news/save', 'News::save');
$routes->get('/news/(:any)', 'Content::detail/$1');
// $routes->get('/recruitment', 'Recruitment::index');



// $routes->get('/equipment/create', 'Admin::form');
// $routes->get('/equipment/save', 'Admin::save');
// $routes->get('/admin', 'Admin::index');
// $routes->get('/contact', 'EmailController::index');
$routes->get('/equipment', 'Equipment::index');
$routes->post('/equipment/save', 'Equipment::save');
$routes->get('/equipment/create', 'Equipment::create');
$routes->delete('/equipment/(:num)', 'Equipment::delete/$1');
$routes->get('/equipment/edit/(:segment)', 'Equipment::edit/$1');
// $routes->get('/news/(:any)','Content::detail/$1');
$routes->get('/katalog/(:any)','Katalog::detail/$1');
$routes->get('/equipment/(:any)','Equipment::detail/$1');

$routes->get('contact', 'EmailController::index',['as'=>'contact']);
$routes->post('/send', 'EmailController::send',['as'=>'send.email']);

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
