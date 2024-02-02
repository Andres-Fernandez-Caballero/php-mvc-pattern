<?php

// Autoload para cargar automáticamente las clases
spl_autoload_register(function ($className) {
    include 'controllers/' . $className . '.php';
});

$routes = include 'routes/web.php'; // Incluye las rutas
$currentRoute = $_SERVER['REQUEST_URI']; // Obtén la ruta actual desde la URL

if (array_key_exists($currentRoute, $routes)) { // Verifica si la ruta existe en las definiciones de rutas
    $route = $routes[$currentRoute];

    $controllerClassName = ucfirst($route['controller']) . 'Controller';    // Forma el nombre completo de la clase del controlador

    // Verifica si la clase del controlador existe
    if (class_exists($controllerClassName)) {

        $controller = new $controllerClassName(); // Crea una instancia del controlador

        // Verifica si la acción existe en el controlador
        $action = $route['action'];
        if (method_exists($controller, $action)) {
            // Llama a la acción del controlador y obtén la vista con los datos
            $viewContent = $controller->$action();

            echo $viewContent;  // Muestra la vista según tus necesidades
            
        } else {
            echo '404 Acción no válida';
        }
    } else {
        echo '405 Controlador no encontrado';
    }
} else {
    echo ' 406 Ruta no encontrada';
}
