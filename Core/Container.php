<?php

namespace Core;

class Container
{
    protected $bindings = [];
    function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    function resolve($key)
    {
        if(!array_key_exists($key,$this->bindings)){
            throw new \Exception('This key don`t exist '. $key);
        }
        if(array_key_exists($key,$this->bindings)){
            $resolver = $this->bindings[$key];
            return call_user_func($resolver);
        }

    }
}