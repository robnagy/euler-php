<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Palindrome;

class Solution4 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the largest palindrome made from
     * the product of two 3-digit numbers.
     *
     * @return void
     */
    public function run()
    {
        $num1 = 999;
        $num2 = 999;
        $limit = 910;
        return Palindrome::largestPalindromeProduct($num1, $num2, $limit);
    }
}
