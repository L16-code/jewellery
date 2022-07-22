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
$routes->get('/index', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/index_2', 'Home::index_2');
$routes->get('/news', 'Home::news');
$routes->get('/shop', 'Home::shop');
$routes->get('/single-news', 'Home::single_news');
$routes->get('/single-product', 'Home::single_product');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');




// routes for user login
$routes->post('/register', 'Register::userSignup');
$routes->post('/login', 'Login::login');
//end routes for user login

$routes->post('/adminregister', 'adminregister::register');
$routes->post('/Login', 'adminlogin::login');
$routes->get('/logout', 'Logout::logout');



// routes for admin starts here
$routes->get('/admin', 'Admin::index');
$routes->get('/pages-login', 'Admin::login');
$routes->get('/charts-apexcharts', 'Admin::apexcharts');
$routes->get('/charts-chartjs', 'Admin::chartjs');
$routes->get('/charts-echarts', 'Admin::echarts');
$routes->get('/users-profile', 'Admin::profile');
$routes->get('/pages-contact', 'Admin::contact');
$routes->get('/pages-faq', 'Admin::faq');
$routes->get('/pages-register', 'Admin::register');
$routes->get('/pages-404-error', 'Admin::error');
$routes->get('/product-upload', 'Admin::product');
$routes->get('/display', 'Admin::display');
$routes->get('/category', 'Admin::category');
$routes->get('/subcategory', 'Admin::subcategory');
$routes->get('/categorytable', 'Admin::categorytable');


$routes->get('/edit/(:num)', 'product::edit/$1');
$routes->put('/update/(:num)', 'product::update/$1');
// $routes->get('/checksession', 'Admin::session');

$routes->post('/maincategory', 'Category::Subcategory');
$routes->post('/maincategory1', 'Category::category');

// $routes->post('/maincategory', 'Category::category');
$routes->post('/productsadd', 'product::products');

// $routes->post('/mcategory', 'Category::category');

// $routes->post('/deleteproduct', 'product::delete');
$routes->get('/delete/(:num)', 'product::delete/$1');








// routes for admin ends here

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
