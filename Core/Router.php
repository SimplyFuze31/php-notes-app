<?php

namespace Core;

class Router
{
    protected array $routes = [];

    function get(string $uri, string $controller): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }

    function post(string $uri, string $controller): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }

    function delete(string $uri, string $controller): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }

    function patch(string $uri, string $controller): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }

    function put(string $uri, string $controller): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }

    function route($uri, $method)
    {
        echo $uri;
        echo $method;
        foreach ($this->routes as $route) {
            if($route['uri'] === $uri and $route['method'] === $method){
                return require $route['controller'];
            }
        }
        abort();

    }


}






/*function routeToController($url,$routes)
{
    if(array_key_exists($url,$routes)){
        require $routes[$url];
    }else{
        abort();
    }

}


$routes = require base_path('routes.php');

routeToController($_SERVER['REDIRECT_URL'],$routes);*/