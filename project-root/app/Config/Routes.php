<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

<<<<<<< Updated upstream
$routes->get('video_details/', 'APIYoutube::index');
=======
$routes->get('liste_post', 'PostController::index');

$routes->get('youtube/', 'VideoController::index');
$routes->post('results_youtube/', 'VideoController::search');
>>>>>>> Stashed changes
