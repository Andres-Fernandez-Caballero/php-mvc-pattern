<?php

namespace App\Controllers;

class AuthController {
    
        public function login() 
        {
            ob_start();
            include __DIR__ . '/../../views/login.php';
            $view = ob_get_clean();
            echo $view;
        }

        public function register()
        {
            ob_start();
            include __DIR__ . '/../views/register.php';
            $view = ob_get_clean();
            return $view;
        }
}