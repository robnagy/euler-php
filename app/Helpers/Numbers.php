<?php

namespace App\Helpers;

class Numbers
{
    /**
     * Checks if $num is an even number
     *
     * @param integer $int
     * @return boolean
     */
    public static function isEven(int $num) : bool
    {
        return ($num % 2 === 0);
    }
}
