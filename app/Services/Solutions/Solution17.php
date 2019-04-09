<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;
use App\Helpers\NumbersToWords;

class Solution17 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the number of letters used to write
     * out all the numbers from 1 to 1000
     * (one thousand) inclusive
     *
     * @return void
     */
    public function run()
    {
        $letters = 0;

        for ($x = 1; $x <= 1000; $x++) {
            $number = new NumbersToWords($x);
            $words = $number->convert();
            $words = str_replace(' ', '', $words);
            $letters += strlen($words);
        }

        return $letters;
    }
}
