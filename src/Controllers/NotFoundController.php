<?php

namespace GMath\Controllers;

use GMath\Http\Request;
use GMath\Http\Response;
use GMath\Services\RenderView;

class NotFoundController{

    public function notFoundApiRoute(Request $request, Response $response){

        Response::json([
            'erro' => true,
            'success' => false,
            'message' => "404 Not Found",
        ], 404);
    }

    public function notFoundWebRoute(Request $request, Response $response){
        RenderView::loadView("404NotFound");
    }
}

?>