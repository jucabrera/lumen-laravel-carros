<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/carros', 'CarrosController@list');
$router->get('/carros/{id}', 'CarrosController@get');

$router->put('/carros/{id}', 'CarrosController@update');
$router->delete('/carros/{id}', 'CarrosController@delete');

$router->post('/carros', 'CarrosController@insert');


