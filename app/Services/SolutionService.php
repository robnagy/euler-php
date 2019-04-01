<?php

namespace App\Services;

use App\Contracts\SolutionInterface;
use App\Contracts\SolutionServiceInterface;
use App\Services\Solutions;

class SolutionService implements SolutionServiceInterface
{
    public function getSolution(int $solutionNumber, bool $debug = false): SolutionInterface
    {
        $solution = 'App\Services\Solutions\Solution'.$solutionNumber;
        $solution = new $solution($debug);
        return $solution;
    }
}
