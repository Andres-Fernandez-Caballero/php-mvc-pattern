<?php 

$routes = [
    '/' => ['controller' => 'Main', 'action' => 'home'],
    '/auth/login' => ['controller' => 'Auth', 'action' => 'login'],
    '/auth/register' => ['controller' =>'Auth', 'action' => 'register'],
];

return $routes;