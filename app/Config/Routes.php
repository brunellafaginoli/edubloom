<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// 1. RUTAS DE AUTENTICACIÓN DE USUARIO

// 1.1 Mostrar formulario de registro
$routes->get('/register', 'Auth::register');

// 1.2 Procesar formulario de registro
$routes->post('/register', 'Auth::processRegister');

// 1.3 Mostrar formulario de inicio de sesión
$routes->get('/login', 'Auth::login');

// 1.4 Procesar formulario de inicio de sesión
$routes->post('/login', 'Auth::processLogin');

// 1.5 Cerrar sesión
$routes->get('/logout', 'Auth::logout');

$routes->get('/cursos', 'Cursos::index');
$routes->get('/cursos/crear', 'Cursos::crear');
$routes->post('/cursos/guardar', 'Cursos::guardar');
$routes->get('/cursos/editar/(:num)', 'Cursos::editar/$1');
$routes->post('/cursos/actualizar/(:num)', 'Cursos::actualizar/$1');
$routes->get('/cursos/eliminar/(:num)', 'Cursos::eliminar/$1');

