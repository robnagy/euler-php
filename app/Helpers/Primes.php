<?php

namespace App\Helpers;

class Primes
{
    /**
     * Generates $count amount of primes.
     * Uses sieve to eliminate numbers
     * up to an estimated value.
     *
     * @param integer $count
     * @return array
     */
    public static function generatePrimes(int $count) : array
    {
        $primes = [];
        $sieve = [];
        $estimate = self::estimateNumbersContainingXPrimes($count);
        $x = 2;

        while (count($primes) < $count)
        {
            if (!isset($sieve[$x]))
            {
                if (isset($primes[$x])) {
                    $num = $primes[$x];
                } else {
                    $num = $x + $x;
                }
                do {
                    $sieve[$num] = 0;
                    $num += $x;
                } while ($num <= $estimate);
                $primes[$x] = $num;
            }
            if ($x === 2) $x++;
            else $x += 2;

            if ($x > $estimate) {
                $increase = (int) $estimate * 0.05;
                $estimate += $increase;
                echo PHP_EOL.'increasing estimate by '.$increase;
                $x = 2;
            }
        }

        return array_keys($primes);
    }

    /**
     * Calculates an estimate of the numbers need to be tested to
     * get $x amount of primes. It uses $x / log($x), which
     * overestimates by 13% for 100, and 8% for 1000000
     *
     * @param integer $x
     * @return integer
     */
    public static function estimateNumbersContainingXPrimes(int $x) : int
    {
        $multiplier = 10;
        $guess = $multiplier * $x;
        do {
            $estimate = (int)($guess / Log($guess));
            if ($estimate < $x) {
                $multiplier += 0.3;
                $guess = $multiplier * $x;
            }

        } while ($estimate - $x < 0);
        $guess = (int) ($guess * 0.8);
        return $guess;
    }
}
