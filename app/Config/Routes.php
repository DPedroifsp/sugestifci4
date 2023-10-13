<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::entra');
$routes->get('/registrar', 'Registra::index');
$routes->post('/registrar', 'Registra::registra');
$routes->get('/SugestIF', 'site::index');
$routes->get('/SugestIF/logout', 'logout::index');
$routes->get('/SugestIF/sugira', 'sugira::index');
$routes->post('/SugestIF/sugira', 'sugira::sugere');
$routes->get('/SugestIF/Detalhes/(:num)', 'detalhes::index/$1');
$routes->get('/SugestIF/Perfil', 'perfil::index');
$routes->post('/SugestIF/Perfil', 'perfil::altera');
