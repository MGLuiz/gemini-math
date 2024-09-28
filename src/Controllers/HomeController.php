<?php

namespace GMath\Controllers;

use GMath\Http\Request;
use GMath\Http\Response;

class HomeController{
    
    public function index(Request $request, Response $response, array $matches){
        echo "Hello World!";
    }
}

?>