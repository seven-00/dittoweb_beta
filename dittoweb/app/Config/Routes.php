<?php

use App\Controllers\Content;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('main/register','Register::register');

$routes->get('/testdata','Auth::users');
$routes->get('/main','Welcome::index');
$routes->get('/main/test','Welcome::test');


#login routes
$routes->get('/login','Login::login');
$routes->post('/login','Login::do_login');
$routes->get('/logout','Login::logout');


#Register routes
$routes->get('/register','Register::register');
$routes->post('/register','Register::do_Register');

#content routes
$routes->get('/content','Content::content');
$routes->get('/content/(:segment)',[Content::class, 'content_details']);
$routes->post('content/add_review/(:segment)',[Content::class, 'add_review']);
$routes->post('content/dynamicload','Content::dynamic_load');
$routes->post('content','Content::search_content');
$routes->get('content/lists/(:segment)',[Content::class,'content_list']);


#user routes
$routes->get('/user','User::user_details');
$routes->get('/testapi','User::user_test');