<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$route['default_controller'] = 'carrito';
$route['carrito/mostrar_productos'] = 'carrito/mostrar_productos';
$route['carrito/agregar_al_carrito'] = 'carrito/agregar_al_carrito';
$route['carrito/mostrar_carrito'] = 'carrito/mostrar_carrito';
