<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Arrays;
use App\Helpers\Multiples;


class Solution1 extends BaseSolution implements SolutionInterface
{
    public function runMe()
    {
        $num1 = 3;
        $num2 = 5;
        $limit = 2000;

        return Multiples::sumOfMultiples($num1, $num2, $limit);
    }

}
