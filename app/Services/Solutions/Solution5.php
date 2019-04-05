<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Multiples;

class Solution5 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the smallest positive number
     * that is evenly divisible by all
     * of the numbers from 1 to 20
     *
     * @return void
     */
    public function run()
    {
        $limit = 20;
        return Multiples::lowestCommonMultiple($limit);
    }

}
