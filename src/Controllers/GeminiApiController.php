<?php

namespace GMath\Controllers;

use GMath\Http\Request;
use GMath\Http\Response;
use GMath\Services\GeminiApi;

class GeminiApiController{
    
    public function solveImage(Request $request, Response $response, array $matches){
        self::bodyValidation($request::body());
        
        extract($request::body());

        if ($answerType == 'quick'){
            $solution = GeminiApi::quickImage($imageUrl);

            $response::json([
                'erro' => false,
                'success' => true,
                'solution' => str_replace(['*'], '', $solution),
            ], 200);

        }else if ($answerType == 'detailed'){
            $solution = GeminiApi::detailedImage($imageUrl);

            $response::json([
                'erro' => false,
                'success' => true,
                'solution' => str_replace(['*'], '', $solution),
            ], 200);

        }else{
            $response::json([
                'erro' => true,
                'success' => false,
                'message' => "Answer Type is invalid",
            ], 400);

            exit;
        }
    }

    public static function solveText(Request $request, Response $response, array $matches){
        self::bodyValidation($request::body());
        extract($request::body());

        if ($answerType == 'quick'){
            $solution = GeminiApi::quickText($text);

            $response::json([
                'erro' => false,
                'success' => true,
                'solution' => str_replace(['*'], '', $solution),
            ], 200);

        }else if ($answerType == 'detailed'){
            $solution = GeminiApi::detailedText($text);

            $response::json([
                'erro' => false,
                'success' => true,
                'solution' => str_replace(['*'], '', $solution),
            ], 200);

        }else{
            $response::json([
                'erro' => true,
                'success' => false,
                'message' => "Answer Type is invalid",
            ], 400);

            exit;
        }
    }

    public static function chatVrTeacher(Request $request, Response $response, array $matches){
        self::bodyValidation($request::body());
        extract($request::body());

        if (isset($prompt)){
            $response::json([
                'erro' => false,
                'success' => true,
                'message' => str_replace(['*'], '', GeminiApi::teacherChat($prompt)),
            ], 200);
            exit;

        }else{
            $response::json([
                'erro' => true,
                'success' => false,
                'message' => "Answer Type is invalid",
            ], 400);
            exit;
        }
    }

    private static function bodyValidation(array $body){
        
        if(empty($body)){
            Response::json([
                'erro' => true,
                'success' => false,
                'message' => "Missing body json input",
            ], 400);

            exit;
        }
    }
}

?>