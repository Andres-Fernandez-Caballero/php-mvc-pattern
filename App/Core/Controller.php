<?php

abstract class Controller
{
    /**
    ** @param string $view is the path where te view exists
    ** @param array $data is the data that will be passed to the view
    ** @return void
    */
    public function view($view)
    {
        ob_start();
        include __DIR__ . '/../../views/' . $view . '.php';
        $view = ob_get_clean();
        echo $view;
    }
}