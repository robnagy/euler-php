<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Strings;

class Solution22 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns this sum of alphabetical values of the
     * sorted names retrieved from p022_names.txt
     *
     * @return void
     */
    public function run()
    {
        $names = Storage::get('p022_names.txt');
        $names = str_replace('"', '', $names);
        $names = explode(',', $names);
        sort($names);
        $sum = 0;
        foreach ($names as $index => $name) {
            $sum += Strings::alphabeticalValue($name) * ($index + 1);
        }
        return $sum;
    }
}
