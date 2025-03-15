<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login', 'Login::store', ['as' => 'login.store']);
$routes->get('/login/destroy', 'Login::destroy', ['as' => 'login.destroy']);

$routes->get('/register', 'Register::index', ['as' => 'register']);
$routes->post('/register/store', 'Register::store', ['as' => 'register.store' ]);

$routes->group('admin',['filter' => 'auth'], function ($routes) {
    $routes->get('private', 'RoutePrivate::index', ['as' => 'private']);
});
