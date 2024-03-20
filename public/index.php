<?php

const BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

require BASE_PATH.'Core/functions.php';

spl_autoload_register(function ($class){
    $class = str_replace('\\','/',$class);
   require base_path($class.'.php');
});

require base_path('Core/router.php');

