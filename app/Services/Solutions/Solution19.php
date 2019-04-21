<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use Illuminate\Support\Carbon;

class Solution19 extends BaseSolution implements SolutionInterface
{
    /**
     * Calculates the number of Sundays that fell on
     * the first of the month during the twentieth
     * century (1 Jan 1901 - 31 Dec 2000)
     *
     * @return void
     */
    public function run()
    {
        $startDate = new Carbon();
        $startDate->setDate(1901, 1, 1);
        $endDate = new Carbon();
        $endDate->setDate(2000, 12, 31);
        $sundays = 0;
        while ($startDate->lt($endDate)) {
            if ($startDate->dayName === 'Sunday') {
                $sundays++;
            }
            $startDate->addMonthNoOverflow();
        }
        return $sundays;
    }
}
