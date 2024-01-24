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
// $routes->get('register/','UserController::register');
$routes->match(['get','post'],'register', 'UserCOntroller::register');