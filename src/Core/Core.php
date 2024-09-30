<?php 

namespace GMath\Core;

use GMath\Http\Request;
use GMath\Http\Response;

class Core {
    public static function dispatch(array $routes)
    {
        $url = $_SERVER['REQUEST_URI'];
        $matches = [];

        $url !== '/' && $url = rtrim($url, '/');

        $routeFound = false;
        $prefixController = 'GMath\\Controllers\\';

        foreach ($routes as $route) {
            $pattern = '#^'. preg_replace('/{id}/', '([\w-]+)', $route['path']) .'$#';

            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches);

                $routeFound = true;

                if ($route['method'] != Request::method()){
                    Response::json([
                        'erro' => true,
                        'success' => false,
                        'message' => "Method not allowed",
                    ], 405);
                    return;
                }

                [$controller, $action] = explode('@', $route['action']);

                $controller = $prefixController . $controller;

                $extendController = new $controller();
                $extendController->$action(new Request, new Response, $matches);
            }
        }

        if (!$routeFound){
            if (!$routeFound) {
                $controller = $prefixController . 'NotFoundController';
                $extendController = new $controller();
                $extendController->index(new Request, new Response);
            }
        }
    }
}