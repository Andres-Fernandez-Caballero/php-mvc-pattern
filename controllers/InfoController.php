<?php

class InfoController {
    
        public function mision() 
        {
            ob_start();
            include __DIR__ . '/../views/info_mision.php';
            
            //$html="<h1>mision<h1>";

            $view = ob_get_clean();
            return $view;
        }

        public function vision() 
        {
            ob_start();
            include __DIR__ . '/../views/info_vision.php';
            
            //$html="<h1>mision<h1>";

            $view = ob_get_clean();
            return $view;
        }

        public function filosofia() 
        {
            ob_start();
            include __DIR__ . '/../views/info_filosofia.php';
            
         //   echo "<h1>Filosofía<h1>";

            $view = ob_get_clean();
            return $view;
        }
}