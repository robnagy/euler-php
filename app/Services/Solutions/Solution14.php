<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Collatz;

class Solution14 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the starting number, under
     * one million, which produces the
     * longest Collatz sequence
     *
     * @return void
     */
    public function run()
    {
        $max = 0;
        $largest = 0;
        $start = 999999;
        $end = 100000;
        $sequence = [];
        for ($x = $start; $x > $end; $x--) {
            $count = Collatz::sequence($x, $sequence);
            if ($count > $max) {
                $max = $count;
                $largest = $x;
                $this->log('new max', $max);
                $this->log('num is', $largest);
            }
        }
        return $largest;
    }
}
