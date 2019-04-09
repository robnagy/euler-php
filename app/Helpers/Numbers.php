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

    /**
     * Returns sum of digits of $num
     *
     * @param integer $num
     * @return integer
     */
    public static function sumOfDigits(int $num) : int
    {
        $num = (string) $num;
        $result = 0;
        for ($x = 0; $x < strlen($num); $x++) {
            $result += (int)$num[$x];
        }
        return $result;
    }

    /**
     * Returns the alternating sum of digits of $num
     * e.g. $num = 12345; returns 1-2+3-4+5 = 3
     *
     * @param integer $num
     * @return integer
     */
    public static function alternatingSumOfDigits(int $num) : int
    {
        $num = (string) $num;
        $result = 0;
        $add = true;
        for ($x = 0; $x < strlen($num); $x++) {
            if ($add)
                $result += (int)$num[$x];
            else
                $result -= (int)$num[$x];
            $add = !$add;
        }
        return $result;
    }

    /**
     * Calculates the sum of squares for x=1 -> x=$limit
     * Returns sum(x^2, x+1^2, x+2^2, ..., $limit^2)
     *
     * @param integer $limit
     * @return integer
     */
    public static function sumOfSquares(int $limit) : int
    {
        $sum = 0;
        for ($x = 1; $x <= $limit; $x++) {
            $sum += $x * $x;
        }
        return $sum;
    }

    /**
     * Calculates square of sums for x=1 -> x=$limit
     * Returns sum(x, x+1, x+2, ..., limit)^2
     *
     * @param integer $limit
     * @return integer
     */
    public static function squareOfSums(int $limit) : int
    {
        $sum = 0;
        for ($x = 1; $x <= $limit; $x++) {
            $sum += $x;
        }
        return $sum * $sum;
    }

    /**
     * Returns the product of digits of $num
     *
     * @param string $num
     * @return integer
     */
    public static function productOfDigits(string $num) : int
    {
        // echo '<br>Getting product for '.$num;
        $product = 1;
        for ($x = 0; $x < strlen($num); $x++) {
            $product *= (int)$num[$x];
        }
        return $product;
    }

    /**
     * Uses Euclids formula to calculate values
     * for a,b,c where a^2 + b^2 = c^2
     * and a + b + c = $limit.
     *
     * @param integer $limit
     * @return array ['a' => $a, 'b' => $b, 'c' => $c]
     */
    public static function euclidsFormula(int $limit) : array
    {
        for ($n = 1; $n < $limit; $n++) {
            for ($m = $n+1; $m < $limit; $m++) {
                $a = ($m * $m) - ($n * $n);
                $b = 2 * $m * $n;
                $c = ($m * $m) + ($n * $n);
                if (($a + $b + $c) == $limit) {
                    return [
                        'a' => $a,
                        'b' => $b,
                        'c' => $c,
                    ];
                }
            }
        }
    }

    /**
     * Calculates n! of $num
     * Limited to int max
     *
     * @param integer $num
     * @return void
     */
    public static function factorialOf(int $num) : int
    {
        if ($num === 1) return 1;
        return $num * self::factorialOf($num - 1);
    }

    /**
     * Returns the number of lattice
     * pathways available for a
     * square of $blocks size.
     *
     * @param integer $blocks
     * @return void
     */
    public static function latticePathways(int $blocks) : int
    {
        $sideBlocks = (int) sqrt($blocks);
        $val = self::factorialOf($sideBlocks);
        $result = Numbers::factorialOf( 2 * $sideBlocks ) / ($val * $val);
        return $result;
    }
}
