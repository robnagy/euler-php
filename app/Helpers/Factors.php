<?php

namespace App\Helpers;

class Factors
{
    /**
     * Generates the prime factors of given $num
     *
     * @param integer $int
     * @return array
     */
    public static function getPrimeFactors(int $num) : array
    {
        $primeFactors = [];
        for ($x = 2; $x <= $num; $x++)
        {
            while ($num % $x === 0)
            {
                $primeFactors[$x] = 1;
                $num = $num / $x;
            }
        }
        $primeFactors = array_keys($primeFactors);
        return $primeFactors;
    }
}
