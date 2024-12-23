<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'HomeController::index'); // Ana sayfa rotası

$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::store');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');

$routes->get('/notes', 'NotesController::index'); // Notları listeleme
$routes->get('/notes/create', 'NotesController::create'); // Not ekleme formu
$routes->post('/notes/store', 'NotesController::store'); // Not kaydetme
$routes->get('/notes/edit/(:segment)', 'NotesController::edit/$1'); // Not düzenleme formu
$routes->post('/notes/update/(:segment)', 'NotesController::update/$1'); // Not güncelleme
$routes->get('/notes/delete/(:segment)', 'NotesController::delete/$1'); // Not silme

$routes->get('/logout', 'AuthController::logout');
