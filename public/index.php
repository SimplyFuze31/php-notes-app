<?php

use Core\Router;

const BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

require BASE_PATH.'Core/functions.php';


spl_autoload_register(function ($class){
    $class = str_replace('\\','/',$class);
   require base_path($class.'.php');
});
require base_path('bootstrap.php');
$router = new Router();
require base_path('routes.php');

$router->route($_SERVER['REDIRECT_URL'],$_POST['__method'] ?? $_SERVER['REQUEST_METHOD']);