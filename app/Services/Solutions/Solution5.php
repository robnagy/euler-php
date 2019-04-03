<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Multiples;

class Solution5 extends BaseSolution implements SolutionInterface
{
    public function run()
    {
        $limit = 20;
        return Multiples::lowestCommonMultiple($limit);
    }

}
