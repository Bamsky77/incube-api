<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('contact/send', 'Contact::send');

// =====================
// ROUTES ADMIN
// =====================
$routes->get('admin', 'Admin::index');
$routes->get('admin/services', 'Admin::services');

$routes->get('admin/services/create', 'Admin::createService');
$routes->post('admin/services/store', 'Admin::storeService');

$routes->get('admin/services/edit/(:num)', 'Admin::editService/$1');
$routes->post('admin/services/update/(:num)', 'Admin::updateService/$1');

$routes->get('admin/services/delete/(:num)', 'Admin::deleteService/$1');

// AUTH
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::doLogin');
$routes->get('logout', 'Auth::logout');

// ADMIN - PORTFOLIO
$routes->get('admin/portfolio', 'Admin::portfolio');

$routes->get('admin/portfolio/create', 'Admin::createPortfolio');
$routes->post('admin/portfolio/store', 'Admin::storePortfolio');

$routes->get('admin/portfolio/edit/(:num)', 'Admin::editPortfolio/$1');
$routes->post('admin/portfolio/update/(:num)', 'Admin::updatePortfolio/$1');

$routes->get('admin/portfolio/delete/(:num)', 'Admin::deletePortfolio/$1');

