<?php

use Core\Response;

function dd($value) : void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die(69);
}

function authorize($condition) : void
{
    if (!$condition){
        abort(Response::FORBIDDEN);
    }
}

function view($path, $data = []) : void
{
    extract($data);


    require base_path("views".DIRECTORY_SEPARATOR.$path);
}

function abort($code = Response::NOT_FOUND) : void
{
    http_response_code($code);
    view("partials/$code.php");

    die($code);
}


function base_path(string $path) : string
{
    return BASE_PATH.$path;
}