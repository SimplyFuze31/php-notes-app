<?php

$routes = require 'routes.php';


function routeToController($url,$routes)
{
    if(array_key_exists($url,$routes)){
        require $routes[$url];
    }else{
        echo '404. Page not found';
    }
}


routeToController($_SERVER[]);
