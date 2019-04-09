<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;
use App\Helpers\Numbers;

class Solution15 extends BaseSolution implements SolutionInterface
{
    /**
     * Returns the number of lattice
     * paths through a 20x20 grid.
     *
     * @return int
     */
    public function run()
    {
        $blocks = 400;
        $result = Numbers::latticePathways($blocks);
        return $result;
    }
}
