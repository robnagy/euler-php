<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Strings;
use App\Helpers\Numbers;

class Solution26 extends BaseSolution implements SolutionInterface
{
    public function run()
    {
        $this->startTimer();
        $largestIndex = 0;
        for ($x = 999; $x > 1; $x--) {
            $sequence = Numbers::getRecurringPartOfDecimal(1, $x);
            $this->log((string) $x, [strlen($sequence) => $sequence]);
            if (strlen($sequence) === $x - 1) {
                $largestIndex = $x;
                break;
            }
        }
        $this->endTimer();
        return $largestIndex;
    }
}
