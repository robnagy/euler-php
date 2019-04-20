<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Factors;
use App\Helpers\Numbers;

class Solution24 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the millionth lexicographic
     * permutation of range 0-9.
     *
     * @return void
     */
    public function run()
    {
        $chars = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $options = 1000000;
        $index = 0;
        while ($options > 1) {
            $permutations = Numbers::factorialOf(count($chars) - 1 - $index);
            $swap = $index + 1;
            while ($options - $permutations > 0) {
                $temp = $chars[$index];
                $chars[$index] = $chars[$swap];
                $chars[$swap] = $temp;
                $swap++;
                $options -= $permutations;
            }
            $this->log($index, $chars);
            $index++;
        }
        return $chars;
    }
}
