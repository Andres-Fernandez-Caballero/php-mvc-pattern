<?php

require __DIR__ .'/vendor/autoload.php';

use Bramus\Router\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router();

$router->get('/', 'App\Controllers\MainController@home');


$router->get('/auth/login', 'App\Controllers\AuthController@login');

$router->get('/hello/(\w+)', function($name) {
    echo 'Hello ' . $name;
});



$router->run();
