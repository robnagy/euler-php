<?php

namespace App\Helpers;

class Fibonacci
{
    /**
     * Generates a Fibonacci sequence
     * up till and including $limit.
     *
     * @param integer $limit
     * @return array
     */
    public static function generate(int $limit) : array
    {
        $sequence = [1];
        $last = 0;
        for ($x = 2; $x <= $limit; $x += $last)
        {
            $last = end($sequence);
            $sequence[] = $x;
        }
        return $sequence;
    }
}
