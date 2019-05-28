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

    public function testGeneratePrimesKeyArray()
    {
        $limit = 10;
        $expected = [2 => true, 3 => true, 5 => true, 7 => true];
        $this->assertEquals(
            $expected,
            Primes::generatePrimesKeyedArray($limit)
        );
    }

    public function testQuadraticPrimesCount()
    {
        $a = 1;
        $b = 41;
        $primes = Primes::generatePrimesKeyedArray(5000);
        $expected = 40;
        $this->assertEquals(
            $expected,
            Primes::quadraticPrimesCount($a, $b, $primes)
        );
    }
}
