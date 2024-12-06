<?php

namespace App;

class Route {
    private $path;
    private $action;

    public function __construct($path, $action)

    {
        this->path = $path;
        this->action = $action;
    }

    public function getPath() {
        return this->path;
    }

    public function getAction() {
        return this->action;
    }
}