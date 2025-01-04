<?php

namespace App;

class Route {
    private $path;
    private $method;
    private $action;

    public function __construct($method, $path, $action)
    {
        $this->path = $path;
        $this->action = $action;
        $this->method = $method;
    }

    public function getPath() {
        return $this->path;
    }

    public function getAction() {
        return $this->action;
    }

    public function getMethod() {
        return $this->method;
    }

    public static function get($path, $action){
        Router::addRoute('GET', $path, $action);
    }

    public static function post($path, $action){
        Router::addRoute('POST', $path, $action);
    }
}