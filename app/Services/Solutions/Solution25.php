<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Fibonacci;

class Solution25 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the index of the first fibonacci number with 1000 digits
     *
     * @return void
     */
    public function run()
    {
        $limit = '1';
        for ($x = 1; $x < 1000; $x++) {
            $limit .= '0';
        }
        $limit = gmp_init($limit);
        $index = Fibonacci::getIndexLarge($limit);
        return $index;
    }
}
