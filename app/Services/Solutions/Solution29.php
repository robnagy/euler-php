<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;

class Solution29 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns count of unique results of a^b for
     * 2 <= a <= 100 and 2 <= b <= 100
     *
     * @return void
     */
    public function run()
    {
        $start = 2;
        $end = 100;
        $numbers = [];
        for ($x = $start; $x <= $end; $x++) {
            for ($y = $start; $y <= $end; $y++) {
                $num = gmp_init($x);
                $num = gmp_pow($num, $y);
                $numbers[gmp_strval($num)] = true;
            }
        }
        $this->log('numbers', $numbers);
        return count($numbers);
    }
}
