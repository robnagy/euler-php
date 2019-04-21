<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;

class Solution23 extends BaseSolution implements SolutionInterface
{
    /**
     * Finds the sum of all positive numbers that are
     * not the sum of two abundant numbers.
     *
     * @return void
     */
    public function run()
    {
        $limit = 20161;
        $abundantNumbers = Numbers::generateAbundantNumbers($limit);

        $sumsOfAbundantNumbers = [];
        for ($x = 0; $x < count($abundantNumbers); ++$x) {
            for ($y = $x; $y < count($abundantNumbers) - 1; $y++) {
                $num = $abundantNumbers[$x] + $abundantNumbers[$y];
                if ($num > $limit) {
                    continue 2;
                } else {
                    $sumsOfAbundantNumbers[$num] = 1;
                }
            }
        }

        $sums = 0;
        for ($x = 1; $x < $limit; $x++) {
            if (!isset($sumsOfAbundantNumbers[$x])) {
                $sums += $x;
                $this->log($x);
            }
        }
        return $sums;
    }
}
