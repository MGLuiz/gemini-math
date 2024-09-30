<?php

namespace GMath\Controllers;

use GMath\Http\Request;
use GMath\Http\Response;
use GMath\Services\GeminiApi;

class GeminiApiController{
    
    public function solveImage(Request $request, Response $response, array $matches){
        extract($request::body());

        if ($answerType == 'quick'){

            $response::json([
                'erro' => false,
                'success' => true,
                'solution' => GeminiApi::quickImage($imageUrl),
            ], 200);

        }else if ($answerType == 'detailed'){

            $response::json([
                'erro' => false,
                'success' => true,
                'solution' => GeminiApi::detailedImage($imageUrl),
            ], 200);

        }else{
            $response::json([
                'erro' => true,
                'success' => false,
                'message' => "Answer Type is invalid",
            ], 400);
        }
    }
}

?>