<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
$routes->get('Auth/', 'Auth::index');
$routes->get('Auth/index/', 'Auth::index');
$routes->get('Auth/login/', 'Auth::login');
$routes->post('Auth/proses_login', 'Auth::proses_login');
$routes->get('Auth/logout', 'Auth::logout');
$routes->get('Auth/atur', 'Auth::atur');
$routes->get('Auth/cek', 'Auth::cek');

$routes->get('Vote/', 'Vote::index');
$routes->get('Vote/index/', 'Vote::index');
$routes->get('Vote/divisi/', 'Vote::divisi');
$routes->get('Vote/pilih_divisi/(:num)', 'Vote::pilih_divisi/$1');

$routes->get('Finish/', 'Finish::index');
$routes->get('Finish/index/', 'Finish::index');

$routes->get('Admin/', 'Admin::index');
$routes->get('Admin/index/', 'Admin::index');
$routes->post('Admin/login/', 'Admin::login');
$routes->get('Admin/logout/', 'Admin::logout');
$routes->get('Admin/dashboard/', 'Admin::dashboard');
$routes->get('Admin/semua_data/', 'Admin::semua_data');
$routes->get('Admin/data_kelas/(:num)', 'Admin::data_kelas/$1');
$routes->get('Admin/data_divisi/(:num)', 'Admin::data_divisi/$1');

$routes->get('Excel/index/', 'Excel::index');
$routes->get('Excel/export_all_data/', 'Excel::export_all_data');


$routes->get('Home/', 'Home::index');
$routes->get('Home/index/', 'Home::index');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
