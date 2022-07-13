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
$routes->post('/login', 'Register::userSignup');
$routes->post('/index', 'Login::login');
//end routes for user login





// routes for admin starts here
$routes->get('/admin', 'Admin::index');
$routes->get('/pages-login', 'Admin::login');
$routes->get('/apexcharts', 'Admin::charts-apexcharts');
$routes->get('/chartjs', 'Admin::charts-chartjs');
$routes->get('/echarts', 'Admin::charts-echarts');
$routes->get('/accordion', 'Admin::components-accordion');
$routes->get('/alerts', 'Admin::components-alerts');
$routes->get('/badges', 'Admin::components-badges');
$routes->get('/breadcrumbs', 'Admin::components-breadcrumbs');
$routes->get('/buttons', 'Admin::components-buttons');
$routes->get('/cards', 'Admin::components-cards');
$routes->get('/carousel', 'Admin::components-carousel');
$routes->get('/group', 'Admin::components-list-group');
$routes->get('/modal', 'Admin::components-modal');
$routes->get('/pagination', 'Admin::components-pagination');
$routes->get('/progress', 'Admin::components-progress');
$routes->get('/spinners', 'Admin::components-spinners');
$routes->get('/tabs', 'Admin::components-tabs');
$routes->get('/tooltips', 'Admin::components-tooltips');
$routes->get('/editors', 'Admin::forms-editors');
$routes->get('/elements', 'Admin::forms-elements');
$routes->get('/layouts', 'Admin::forms-layouts');
$routes->get('/validation', 'Admin::forms-validation');
$routes->get('/bootstrap', 'Admin::forms-bootstrap');
$routes->get('/boxicons', 'Admin::icons-boxicons');
$routes->get('/remix', 'Admin::icons-remix');
$routes->get('/blank', 'Admin::pages-blank');
$routes->get('/contact', 'Admin::pages-contact');
$routes->get('/faq', 'Admin::pages-faq');
$routes->get('/register', 'Admin::pages-register');
$routes->get('/error', 'Admin::pages-404-error');











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
