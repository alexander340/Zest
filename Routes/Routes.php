<?php

// Add the Routes
$router->get('', 'Home@index');

//for test middleware
$router->get('middlewaretest', 'Home@middlewaretest');

//Test using closure
$router->get('user/{id:[0-9]}', function ($args) {
    echo 'Example route using closure '.$args['id'];
});

//Cache the Routes
$router->cacheRouters();
//Dispatch the request
$router->dispatch($_SERVER['QUERY_STRING']);
