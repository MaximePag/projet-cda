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

// route pour la table appointmentsSubjects

$router->get('appointmentsSubjects', 'AppointmentsSubjectsController@index' );
$router->get('/appointmentsSubjects/{id}', 'AppointmentsSubjectsController@show');
$router->post('/appointmentsSubjects', 'AppointmentsSubjectsController@create');
$router->put('/appointmentsSubjects/{id}', 'AppointmentsSubjectsController@update');
$router->delete('/appointmentsSubjects/{id}', 'AppointmentsSubjectsController@delete');

// route pour la table cities

$router->get('cities', 'CitiesController@index' );
$router->get('/cities/{id}', 'CitiesController@show');

// route pour la table pictures

$router->get('pictures', 'PicturesController@index' );
$router->get('/pictures/{id}', 'PicturesController@show');
$router->post('/pictures', 'PicturesController@create');
$router->put('/pictures/{id}', 'PicturesController@update');
$router->delete('/pictures/{id}', 'PicturesController@delete');

// route pour la table requirements

$router->get('requirements', 'RequirementsController@index' );
$router->get('/requirements/{id}', 'RequirementsController@show');
$router->post('/requirements', 'RequirementsController@create');
$router->put('/requirements/{id}', 'RequirementsController@update');
$router->delete('/requirements/{id}', 'RequirementsController@delete');

// route pour la table roles

$router->get('roles', 'RolesController@index' );
$router->get('/roles/{id}', 'RolesController@show');
$router->post('/roles', 'RolesController@create');
$router->put('/roles/{id}', 'RolesController@update');
$router->delete('/roles/{id}', 'RolesController@delete');


                      