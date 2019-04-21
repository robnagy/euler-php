<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;

class Solution6 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the difference between the sum of
     * squares of first one hundred natural
     * numbers and the square of sum
     *
     * @return void
     */
    public function run()
    {
        $limit = 100;
        $square = Numbers::squareOfSums($limit);
        $this->log('square of sums', $square);
        $square -= Numbers::sumOfSquares($limit);
        return $square;
    }
}
