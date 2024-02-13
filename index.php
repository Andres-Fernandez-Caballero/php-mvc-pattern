<?php

require __DIR__ .'/vendor/autoload.php';

use Bramus\Router\Router;

$router = new Router();

$router->get('/', 'App\Controllers\MainController@home');


$router->get('/auth/login', 'App\Controllers\AuthController@login');

$router->get('/hello/(\w+)', function($name) {
    echo 'Hello ' . $name;
});



$router->run();
