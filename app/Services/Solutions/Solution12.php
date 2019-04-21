<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Factors;

class Solution12 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the value of the first triangle number
     * to have over five hundred divisors
     *
     * @return void
     */
    public function run()
    {
        $numberOfFactors = 1;

        $num = 1;
        $x = 2;
        while ($numberOfFactors <= 500) {
            $num += $x;
            $x++;
            $numberOfFactors = Factors::numberOfFactors($num);
        }

        $this->log('numberOfFactors', $numberOfFactors);
        return $num;
    }
}
