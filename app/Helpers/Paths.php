<?php

namespace App\Helpers;

use App\Helpers\Numbers;

class Paths
{
    /**
     * Returns the number of lattice
     * pathways available for a
     * square of $blocks size.
     *
     * @param integer $blocks
     * @return void
     */
    public static function latticePathways(int $blocks) : int
    {
        $sideBlocks = (int) sqrt($blocks);
        $val = Numbers::factorialOf($sideBlocks);
        $result = Numbers::factorialOf( 2 * $sideBlocks ) / ($val * $val);
        return $result;
    }

    /**
     * Returns the highest sum achievable
     * by taking any path through a
     * triangle of numbers:
     *    1
     *   2 3
     *  4 5 6
     * Highest sum possible is 1+3+6=10
     * @param array $data [[1],[2,3],[4,5,6]]
     * @return integer
     */
    public static function maximumPathSum(array $data) : int
    {
        $rows = count($data)-2;
        for ($x = $rows; $x >= 0; $x--) {
            for ($y = 0; $y < count($data[$x]); $y++) {
                $op1 = $data[$x+1][$y];
                $op2 = $data[$x+1][$y+1];
                $data[$x][$y] +=  $op1 >= $op2 ? $op1 : $op2;
            }
        }
        return $data[0][0];
    }
}
