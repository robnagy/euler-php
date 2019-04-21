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
    public static function generate(int $limit): array
    {
        $sequence = [1];
        $last = 0;
        for ($x = 2; $x <= $limit; $x += $last) {
            $last = end($sequence);
            $sequence[] = $x;
        }
        return $sequence;
    }

    /**
     * Returns the index of the Fibonacci number >= to $limit
     *
     * @param \GMP $limit
     * @return integer
     */
    public static function getIndexLarge(\GMP $limit): int
    {
        $num = gmp_init(3);
        $index = 4;
        $previous = 2;
        while ($num < $limit) {
            $temp = $num;
            $num += $previous;
            $previous = $temp;
            $index++;
        }
        return $index;
    }
}
