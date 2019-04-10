<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Arrays;
use App\Helpers\Multiples;


class Solution1 extends BaseSolution implements SolutionInterface
{
    /**
     * Finds the sum of all the multiples of 3 or 5 below 1000
     *
     * @return void
     */
    public function run()
    {
        $num1 = 3;
        $num2 = 5;
        $limit = 999;

        return Multiples::sumOfMultiples($num1, $num2, $limit);
    }

}
