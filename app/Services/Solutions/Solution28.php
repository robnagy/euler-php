<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;

class Solution28 extends BaseSolution implements SolutionInterface
{
    /**
     * Calculates the sum of diagonals in a 1001x1001 side square clockwise
     * spiral. e.g:
     * 7 8 9
     * 6 1 2
     * 5 4 3
     * = 26
     * @return void
     */
    public function run()
    {
        $length = 1001;
        $count = Numbers::spiralDiagonalSum($length);
        return $count;
    }
}
