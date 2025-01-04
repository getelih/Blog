<?php

namespace App;
class Router {

    private $path;
    private $method;
    private static $routes = []; 

    public function __construct($path, $method)
    {
        $this->path = parse_url($path, PHP_URL_PATH);
        $this->method = $method;
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route->getPath() === $this->path && $route->getMethod() === $this->method){
                return $route;
            }
        }
    }

    public static function addRoute($method, $path, $action){
        self::$routes[] = new Route($method, $path, $action);
    }
}