<?php

namespace GMath\Services;

class RenderView{
    public static function loadView($viewName, array $args = []){
        extract($args);
        
        require_once "./src/Views/$viewName.php";
    }
}

?>