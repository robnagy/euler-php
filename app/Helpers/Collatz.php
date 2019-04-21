<?php

namespace App\Helpers;

class Collatz
{
    /**
     * Returns Collatz sequence for $num. Optional
     * $sequenced array contains known values.
     *
     * @param integer $num
     * @param array $sequenced
     * @return integer
     */
    public static function sequence(int $num, array &$sequenced = []): int
    {
        if (isset($sequenced[$num])) {
            return $sequenced[$num];
        }

        if ($num % 2 === 0) {
            $num = $num / 2;
        } else {
            $num = 3 * $num + 1;
        }
        $count = 1;
        if ($num > 1) {
            $count += self::sequence($num, $sequenced);
        }
        $sequenced[$num] = $count;
        return $count;
    }
}
