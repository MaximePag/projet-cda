<?php

$router->get('/', function () use ($router) {
    $results = app('db')->select("SELECT * FROM users");

     return $results;
});

// route pour la table Documents

$router->get('Documents', 'DocumentsController@index' );
$router->get('/Documents/{id}', 'DocumentsController@show');
$router->post('/Documents', 'DocumentsController@create');
$router->put('/Documents/{id}', 'DocumentsController@update');
$router->delete('/Documents/{id}', 'DocumentsController@delete');
