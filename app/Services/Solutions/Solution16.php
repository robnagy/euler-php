<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;
use App\Helpers\Strings;

class Solution16 extends BaseSolution implements SolutionInterface
{
    /**
     * Calculates sum of the digits
     * of the number 21000
     *
     * @return void
     */
    public function run()
    {
        $result = gmp_pow(2,1000);
        $this->log($result);
        $result = Strings::sumOfIntString($result);
        return $result;
    }
}
