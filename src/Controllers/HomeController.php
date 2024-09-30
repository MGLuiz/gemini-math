<?php

namespace GMath\Controllers;

use GMath\Http\Request;
use GMath\Http\Response;
use GMath\Services\RenderView;

class HomeController{
    
    public function index(Request $request, Response $response, array $matches){
        RenderView::loadView("SolveByImageView");
    }
}

?>