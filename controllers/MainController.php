<?php

class MainController {

    public function home() 
    {
        ob_start();
        include __DIR__ . '/../views/home.php';
        $view = ob_get_clean();
        return $view;
    }
}