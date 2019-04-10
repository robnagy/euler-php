<?php

use App\Helpers\Paths;

class PathsTest extends TestCase
{
    public function testLatticePathways9Blocks()
    {
        $blocks = 9;
        $expected = 20;
        $this->assertEquals(
            $expected,
            Paths::latticePathways($blocks)
        );
    }

    public function testMaximumPathSum()
    {
        $data = [[2], [3,4], [5,6,7]];
        $expected = 13;
        $this->assertEquals(
            $expected,
            Paths::maximumPathSum($data)
        );
    }
}
