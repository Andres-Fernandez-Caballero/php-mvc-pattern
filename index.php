<?php

// Autoload para cargar automáticamente las clases
spl_autoload_register(function ($className) {
    include 'controllers/' . $className . '.php';
});

// Incluye las rutas
$routes = include 'routes/web.php';

// Obtén la ruta actual desde la URL
$currentRoute = $_SERVER['REQUEST_URI'];


// Verifica si la ruta existe en las definiciones de rutas
if (array_key_exists($currentRoute, $routes)) {
    $route = $routes[$currentRoute];

    // Forma el nombre completo de la clase del controlador
    $controllerClassName = ucfirst($route['controller']) . 'Controller';

    // Verifica si la clase del controlador existe
    if (class_exists($controllerClassName)) {
        // Crea una instancia del controlador
        $controller = new $controllerClassName();

        // Verifica si la acción existe en el controlador
        $action = $route['action'];
        if (method_exists($controller, $action)) {
            // Llama a la acción del controlador y obtén la vista con los datos
            $viewContent = $controller->$action();

            // Muestra la vista según tus necesidades
            echo $viewContent;
        } else {
            echo '404 Acción no válida';
        }
    } else {
        echo '405 Controlador no encontrado';
    }
} else {
    echo ' 406 Ruta no encontrada';
}
