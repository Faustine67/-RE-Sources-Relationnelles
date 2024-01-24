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
// $routes->match(['get','post'],'register', 'Users::register', ['filter' => 'noauth']);