<?php
function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo '<pre>';
}

function dd($variable){
    dump($variable);
    die;
}

function view($viewname, $vaiables=[]) {
    extract($variables);
    include __DIR__ . "/views/$viewname.php";
}
?>