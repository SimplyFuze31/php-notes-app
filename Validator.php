<?php

class Validator
{


    public static function string(string $string, $min = 1, $max = INF) : bool
    {

        if (strlen(trim($string)) === 0 )
            return false;

        if (strlen($string) < $min or strlen($string) > $max )
            return false;

        return true;
    }
}