<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
/*$router->get('/', function () use ($router) {
    $results = app('db')->select("SELECT * FROM users");

     return $results;
});*/

//routes pour la table user
$router->get('user', 'UserController@index' );
$router->get('/user/{id}', 'UserController@show');
$router->post('/user', 'UserController@create');
$router->put('/user/{id}', 'UserController@update');
$router->delete('/user/{id}', 'UserController@delete');

// routes pour la table appointments

$router->get('appointments', 'AppointmentsController@index' );
$router->get('/appointments/{id}', 'AppointmentsController@show');
$router->post('/appointments', 'AppointmentsController@create');
$router->put('/appointments/{id}', 'AppointmentsController@update');
$router->delete('/appointments/{id}', 'AppointmentsController@delete');

                      