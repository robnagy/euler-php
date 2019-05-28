<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Primes;

class Solution27 extends BaseSolution implements SolutionInterface
{
    /**
     * Using the quadratic equation to generate primes: n*n + n*a + b,
     * this calculates the values for a & b, between -1000 and 1000,
     * which produce the most consecutive primes, for n=0 and n++
     * 
     * @return void
     */
    public function run()
    {
        $start = -1000;
        $end = 1000;
        $primeLimit = 5000;
        $primes = Primes::generatePrimesKeyedArray($primeLimit);

        $max = 0;
        $maxA = 0;
        $maxB = 0;

        $this->startTimer();

        // a is odd number
        for ($a = $start + 1; $a < $end; $a += 2) {
            for ($b = $start; $b <= $end; $b++) {
                // b must be a prime
                if ($primes[abs($b)] ?? false) {
                    $count = $this->countPrimes($a, $b, $primes);
                    if ($count > $max) {
                        $max = $count;
                        $maxA = $a;
                        $maxB = $b;
                    }
                }
            }
        }

        $this->endTimer();

        return [$max, $maxA, $maxB, $maxA * $maxB];
    }
}
