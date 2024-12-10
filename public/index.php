<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}


spl_autoload_register(function ($className) {
    $parts = explode('\\', $className);
    unset($parts[0]);
    $className = implode('/', $parts);
    // $parts = explode('\\', $className);
   // dump($parts);
   // unset($parts[0]);
   // dump($parts);
   // $classname = implode('/', $parts);
   // dump($classname);
    require_once 'src/' . $className . '.php';
});


//use App\Controllers\PublicController as PC;


//use App\DB;

require_once __DIR__ '/../helpers.php';
dd($_SERVER);
require_once __DIR__ '/../routes.php';

$router = new APP\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();

if($match){
    if call_user_func($match->getAction()) {
        call_user_func($match->getAction())
    }
    else if (is_array($match->getAction()) &&
        count($match->getAction()) === 2 &&
        class_exists($match->getAction()[0]) &&
        method_exists($match->getAction()[0], $match->getAction()[1])) {

            $class = $match->getAction()[0];
            $controller = new $class();
            $method = $match->getAction()[1];
            $controller->$method();
        } else {
            echo 'error Route Action confiured wrong';
        }
}
else {
    http_response_code(404);
    echo '404 page not found';
}

//$db = new APP\DB();
//$controller = new APP\Controllers\PC();


//dump($router);
//dump($db);
//dump($controller);

/* switch ($_SERVER['REQUEST_URI']) {
    case '/':
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        include '../views/us.php';
        break;
    case '/tech':
        include '../views/tech.php';
        break;
    default:
        echo '404 page not found!';
        break;
}*/
?>