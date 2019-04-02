<?php

namespace App\Services\Solutions;

use App\Helpers\Fibonacci;
use App\Helpers\Arrays;
use App\Contracts\SolutionInterface;


class Solution2 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the sum of even numbers in the
     * Fibonnaci sequence <= 4 million.
     *
     * @return int
     */
    public function run()
    {
        $limit = 4000000;
        $sequence = Fibonacci::generate($limit);
        $sequence = Arrays::filterForEvenNumbers($sequence);
        return array_sum($sequence);
    }
}
