<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;

class Solution9 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the product of abc for
     * the Pythagorean triplet for
     * which a + b + c = 1000.
     *
     * @return int
     */
    public function run()
    {
        $limit = 1000;

        $result = Numbers::euclidsFormula($limit);
        $this->log('Euclids formula result: ', $result);
        $result = $result['a'] * $result['b'] * $result['c'];

        return $result;
    }
}
