<?php

namespace Core;
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

    public static function email(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}