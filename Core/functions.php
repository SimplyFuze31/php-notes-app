<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die(69);
}

function authorize($condition)
{
    if (!$condition){
        abort(Response::FORBIDDEN);
    }
}

function base_path(string $path) : string
{
    return BASE_PATH.$path;
}