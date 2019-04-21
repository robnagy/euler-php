<?php

use App\Helpers\Primes;

class PrimesTest extends TestCase
{
    public function testGeneratePrimes()
    {
        $count = 10;
        $expected = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
        $this->assertEquals(
            $expected,
            Primes::generatePrimes($count)
        );
    }

    public function testGetPrimesBelow()
    {
        $limit = 10;
        $expected = [2, 3, 5, 7];
        $this->assertEquals(
            $expected,
            Primes::getPrimesBelow($limit)
        );
    }
}
