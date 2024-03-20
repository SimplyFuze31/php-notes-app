<?php

use Core\Response;

$routes = require base_path('routes.php');



function routeToController($url,$routes)
{
    if(array_key_exists($url,$routes)){
        require $routes[$url];
    }else{
        abort();
    }

}

function view($path)
{
    return base_path("views".DIRECTORY_SEPARATOR.$path);
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require view("partials/{$code}.php");

    die($code);

}

routeToController($_SERVER['REDIRECT_URL'],$routes);