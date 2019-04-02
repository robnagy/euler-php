<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Factors;


class Solution3 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the largest prime factor of 600851475143
     *
     * @return void
     */
    public function run()
    {
        $num = 600851475143;
        $factors = Factors::getPrimeFactors($num);
        $this->log('factors', $factors);
        return max($factors);
    }
}
