<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Primes;

class Solution7 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the 10 001st prime number
     *
     * @return int
     */
    public function run()
    {
        $limit = 10001;
        return last(Primes::generatePrimes($limit));
    }
}
