<?php

class AuthController {
    
        public function login() 
        {
            ob_start();
            include __DIR__ . '/../views/login.php';
            $view = ob_get_clean();
            return $view;
        }
}