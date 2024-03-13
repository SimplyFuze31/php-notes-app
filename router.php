<?php

$routes = require 'routes.php';



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
    return "views".DIRECTORY_SEPARATOR.$path;
}
function abort($code = 404)
{
    http_response_code($code);

    require "views/partials/{$code}.php";

    die(404);

}

routeToController($_SERVER['REDIRECT_URL'],$routes);