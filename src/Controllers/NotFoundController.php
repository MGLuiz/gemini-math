<?php

namespace GMath\Controllers;

use GMath\Http\Request;
use GMath\Http\Response;

class NotFoundController{

    public function index(Request $request, Response $response){

        Response::json([
            'erro' => true,
            'success' => false,
            'message' => "404 Not Found",
        ], 404);
    }
}

?>