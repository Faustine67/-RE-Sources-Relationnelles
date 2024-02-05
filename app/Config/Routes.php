<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('liste_post', 'PostController::index');

$routes->get('youtube/', 'VideoController::index');
$routes->post('results_youtube/', 'VideoController::search');
$routes->get('login/','UserController::login');
$routes->post('login/','UserController::login');
$routes->get('register/','UserController::register');
$routes->match(['get','post'],'register', 'UserCOntroller::register');
// $routes->post(['change_password/','UserController::change_password']);
$routes->post('video/save', 'VideoController::save');
$routes->post('post/create', 'PostController::create');
$routes->post('post/save', 'PostController::save');
$routes->get('dashboard/', 'DashboardController::index');