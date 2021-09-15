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
$router->get('/', function () use ($router) {
    $results = app('db')->select("SELECT * FROM extras");

     return $results;
});

$router->get('/', function () use($router){
    $results = app('db')->select("SELECT * FROM roles");

    return $results;
});
//routes pour la table extras
$router->get('extra', 'ExtrasController@index' );
$router->get('/extra/{id}', 'ExtrasController@show');
$router->post('/extra', 'ExtrasController@create');
$router->put('/extra/{id}', 'ExtrasController@update');
$router->delete('/extra/{id}', 'ExtrasController@delete');