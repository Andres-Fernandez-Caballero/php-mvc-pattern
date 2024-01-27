<?php 

$routes = [
    '/' => ['controller' => 'Main', 'action' => 'home'],
    '/auth/login' => ['controller' => 'Auth', 'action' => 'login'],
];

return $routes;