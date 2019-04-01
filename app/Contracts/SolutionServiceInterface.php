<?php

namespace App\Contracts;

interface SolutionServiceInterface
{
    /**
     * Returns the solution as per $solutionNumber
     * Solution{$solutionNumber}
     *
     * @param integer $solutionNumber
     * @param bool $debug
     * @return SolutionInterface
     */
    public function getSolution(int $solutionNumber, bool $debug = false) : SolutionInterface;
}
