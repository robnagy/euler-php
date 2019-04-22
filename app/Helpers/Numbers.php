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
    public static function isEven(int $num): bool
    {
        return ($num % 2 === 0);
    }

    /**
     * Returns sum of digits of $num
     *
     * @param integer $num
     * @return integer
     */
    public static function sumOfDigits(int $num): int
    {
        $num = (string) $num;
        $result = 0;
        for ($x = 0; $x < strlen($num); $x++) {
            $result += (int) $num[$x];
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
    public static function alternatingSumOfDigits(int $num): int
    {
        $num = (string) $num;
        $result = 0;
        $add = true;
        for ($x = 0; $x < strlen($num); $x++) {
            if ($add) {
                $result += (int) $num[$x];
            } else {
                $result -= (int) $num[$x];
            }

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
    public static function sumOfSquares(int $limit): int
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
    public static function squareOfSums(int $limit): int
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
    public static function productOfDigits(string $num): int
    {
        // echo '<br>Getting product for '.$num;
        $product = 1;
        for ($x = 0; $x < strlen($num); $x++) {
            $product *= (int) $num[$x];
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
    public static function euclidsFormula(int $limit): array
    {
        for ($n = 1; $n < $limit; $n++) {
            for ($m = $n + 1; $m < $limit; $m++) {
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
     * Calculates n! of $num, limited
     * to int max, approximately 20!
     *
     * @param integer $num
     * @return int
     */
    public static function factorialOf(int $num): int
    {
        if ($num === 1) {
            return 1;
        }

        return $num * self::factorialOf($num - 1);
    }

    /**
     * Calculates n! of $num using GMP
     *
     * @param integer $num
     * @return string
     */
    public static function factorialOfLarge(int $num): string
    {
        if ($num === 1) {
            return 1;
        }

        return gmp_fact($num);
    }

    /**
     * Determines the amicable pairs
     * for numbers up to $limit
     *
     * @param integer $limit
     * @return array
     */
    public static function findAmicableNumbersUpTo(int $limit): array
    {
        $sumsOfFactors = [];
        $amicable = [];
        for ($x = 2; $x < $limit; $x++) {
            if (!isset($sumsOfFactors[$x])) {
                $factors = Factors::getProperFactors($x);
                $y = $sumsOfFactors[$x] = array_sum($factors);
                $sumY = 0;
                if ($y < $limit) {
                    if (!isset($sumsOfFactors[$y])) {
                        $factors = Factors::getProperFactors($y);
                        $sumY = array_sum($factors);
                        $sumsOfFactors[$y] = $sumY;
                    }
                }
                if ($x === $sumY) {
                    $amicable[] = [$x, $y];
                }
            }
        }
        return $amicable;
    }

    /**
     * Generates abundant numbers up to and including $limit
     *
     * @param integer $limit
     * @return array
     */
    public static function generateAbundantNumbers(int $limit): array
    {
        $abundantNumbers = [];
        for ($x = 12; $x <= $limit; $x++) {
            if (array_sum(Factors::getProperFactors($x)) > $x) {
                $abundantNumbers[] = $x;
            }
        }
        return $abundantNumbers;
    }

    /**
     * Calculates the recurring part of the decimal form
     * of the fraction $numerator / $denominator
     *
     * @param integer $numerator
     * @param integer $denominator
     * @return string
     */
    public static function getRecurringPartOfDecimal(int $numerator, int $denominator): string
    {
        $pattern = '';
        $found = [];
        do {
            if ($denominator > $numerator) {
                if (count($found) > 0) {
                    $found[] = $numerator;
                    $pattern .= '0';
                }
                $numerator *= 10;
            } else {
                $pattern .= floor($numerator / $denominator);
                $found[] = $numerator;
                $numerator = ($numerator % $denominator) * 10;
            }
        } while (!in_array($numerator, $found));
        return $pattern;
    }
}
