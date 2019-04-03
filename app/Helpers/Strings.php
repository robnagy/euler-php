<?php

namespace App\Helpers;

class Strings
{
    /**
     * Returns the first $count number of chars from $var.
     * Accepts any $var castable to string.
     *
     * @param mixed $var
     * @param integer $count
     * @return string
     */
    public static function firstXChars($var, int $count) : string
    {
        $temp = (string) $var;
        return substr($temp, 0, $count);
    }

    /**
     * Returns the last $count number of chars from $var.
     * Accepts any $var castable to string.
     *
     * @param mixed $var
     * @param integer $count
     * @return string
     */
    public static function lastXChars($var, int $count) : string
    {
        $temp = (string) $var;
        return substr($temp, -$count);
    }
}
