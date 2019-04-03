<?php

namespace App\Helpers;

Class Multiples
{
    /**
     * Returns an array containing multiples of $int,
     * calculated up to the $inclusiveLimit.
     *
     * @param integer $int
     * @param integer $inclusiveLimit
     * @return array
     */
    public static function multiplesOf(int $int, int $inclusiveLimit) : array
    {
        $results = [];
        for ($x = $int; $x <= $inclusiveLimit; $x += $int) {
            $results[] = $x;
        }
        return $results;
    }

    /**
     * Returns the sum of multiples generated for
     * two ints, up to the inclusive $limit;
     *
     * @param integer $int1
     * @param integer $int2
     * @param integer $limit
     * @return integer
     */
    public static function sumOfMultiples(int $int1, int $int2, int $limit) : int
    {
        $multiples1 = self::multiplesOf($int1, $limit);
        $multiples2 = self::multiplesOf($int2, $limit);
        return array_sum(Arrays::mergeValues($multiples1, $multiples2));
    }

    /**
     * Returns the lowest common multiple of
     * positive numbers up till $limit.
     *
     * @param [type] $limit
     * @return integer
     */
    public static function lowestCommonMultiple($limit) : int
    {
        $range = [];
        for ($x = $limit-2; $x > 1; $x-- ) {
            $range[] = $x;
        }

        $leap = $limit * ($limit - 1);
        // $leap = $limit;
        $x = $leap;
        while (!Factors::areTheseFactorsOf($range, $x)) {
            $x += $leap;
        }
        return $x;
    }
}
