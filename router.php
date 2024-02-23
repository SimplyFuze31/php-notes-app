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

routeToController($_SERVER['REQUEST_URI'],$routes);