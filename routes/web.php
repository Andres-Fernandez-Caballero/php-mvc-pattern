<?php 

$routes = [
    '/' => ['controller' => 'Main', 'action' => 'home'],
    '/auth/login' => ['controller' => 'Auth', 'action' => 'login'],
    '/r' => ['controller' => 'Register', 'action' => 'solicitaEmail'],
    '/mision' => ['controller' => 'Info', 'action' => 'mision'],
    '/vision' => ['controller' => 'Info', 'action' => 'vision'],
    '/filosofia' => ['controller' => 'Info', 'action' => 'filosofia'],
];

return $routes;