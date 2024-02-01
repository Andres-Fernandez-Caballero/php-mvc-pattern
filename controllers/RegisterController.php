<?php

class RegisterController {

    public function solicitaEmail() 
    {
        ob_start();
        include __DIR__ . '/../views/register.php';
        $view = ob_get_clean();
        return $view;
    }
}