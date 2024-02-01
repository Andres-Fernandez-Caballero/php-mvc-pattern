<?php 

$routes = [
    '/' => ['controller' => 'Main', 'action' => 'home'],
    '/auth/login' => ['controller' => 'Auth', 'action' => 'login'],
    '/r' => ['controller' => 'Register', 'action' => 'solicitaEmail'],
];

return $routes;