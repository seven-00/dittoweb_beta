<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('main/login', 'Login::login');
$routes->get('main/register','Register::register');

$routes->get('/testdata','Auth::users');
$routes->get('/main','Welcome::index');
$routes->get('/main/test','Welcome::test');

$routes->post('login','Login::do_login');
$routes->get('/main/content','Content::index');