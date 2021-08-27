<?php

// route pour la table Documents

$router->get('Documents', 'DocumentsController@index' );
$router->get('/Documents/{id}', 'DocumentsController@show');
$router->post('/Documents', 'DocumentsController@create');
$router->put('/Documents/{id}', 'DocumentsController@update');
$router->delete('/Documents/{id}', 'DocumentsController@delete');




// route pour la table TypeOfHeating

$router->get('TypeOfHeating', 'TypeOfHeatingController@index' );
$router->get('/TypeOfHeating/{id}', 'TypeOfHeatingController@show');
$router->post('/TypeOfHeating', 'TypeOfHeatingController@create');
$router->put('/TypeOfHeating/{id}', 'TypeOfHeatingController@update');
$router->delete('/TypeOfHeating/{id}', 'TypeOfHeatingController@delete');
