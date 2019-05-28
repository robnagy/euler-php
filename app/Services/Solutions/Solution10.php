<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Primes;

class Solution10 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the sum of all primes below two million
     *
     * @return void
     */
    public function run()
    {
        $limit = 2000000;
        $primes = Primes::getPrimesBelow($limit);
        return array_sum($primes);
    }
}
