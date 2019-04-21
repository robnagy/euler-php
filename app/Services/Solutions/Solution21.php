<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;

class Solution21 extends BaseSolution implements SolutionInterface
{
    /**
     * Evaluates the sum of all the
     * amicable numbers under 10000
     *
     * @return void
     */
    public function run()
    {
        $limit = 10000;
        $amicablePairs = Numbers::findAmicableNumbersUpTo($limit);
        $sum = 0;
        foreach ($amicablePairs as $pair) {
            foreach ($pair as $num) {
                $sum += $num;
            }
        }
        return $sum;
    }
}
