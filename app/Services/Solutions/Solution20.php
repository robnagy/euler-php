<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;
use App\Helpers\Strings;

class Solution20 extends BaseSolution implements SolutionInterface
{
    /**
     * Finds the sum of the digits in the number 100!
     *
     * @return void
     */
    public function run()
    {
        $num = 100;
        $factorial = Numbers::factorialOfLarge($num);
        $this->log('factorial of ' . $num, $factorial);
        $sum = Strings::sumOfIntString((string) $factorial);
        return $sum;
    }
}
