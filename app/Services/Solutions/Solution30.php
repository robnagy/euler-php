<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Exponents;

class Solution30 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the sum of all numbers that can be written
     * as the sum of the fifth powers of their digits
     *
     * @return void
     */
    public function run()
    {
        $power = 5;
        $sum = 0;
        $limit = ($power + 1) * pow(9, $power);
        for ($x = 2; $x < $limit; $x++) {
            if (Exponents::sumOfPowerOfDigits($x, $power) === $x) {
                $sum += $x;
                $this->log($sum.' '.$x);
            }
        }
        return $sum;
    }
}
