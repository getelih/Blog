<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|webp|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

require_once __DIR__ . '/../helpers.php';
require_once __DIR__ . '/../routes.php';

$router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match){
    if(is_callable($match->getAction())){
        call_user_func($match->getAction());
    } else if (is_array($match->getAction()) &&
                count($match->getAction()) === 2 &&
                class_exists($match->getAction()[0]) &&
                method_exists($match->getAction()[0], $match->getAction()[1])) {
        $class = $match->getAction()[0];
        $controller = new $class();
        $method = $match->getAction()[1];
        $controller->$method();
    } else {
        echo 'error Route Action configured wrong';
    }
} else {
    http_response_code(404);
    echo '404 page not found';
}