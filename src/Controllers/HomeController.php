<?php

namespace GMath\Controllers;

use GMath\Http\Request;
use GMath\Http\Response;
use GMath\Services\RenderView;

class HomeController{
    
    public function solveImage(Request $request, Response $response, array $matches){
        RenderView::loadView("SolveByImageView");
    }

    public function solveText(Request $request, Response $response, array $matches){
        RenderView::loadView("SolveByTextView");
    }

    public function vrTeacher(Request $request, Response $response, array $matches){
        RenderView::loadView("VrTeacherView");
    }
}

?>