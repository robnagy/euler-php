<?php

use App\Helpers\Fibonacci;

class FibonacciTest extends TestCase
{
    public function testFibonacciGenerate()
    {
        $limit = 13;
        $expected = [1, 2, 3, 5, 8, 13];
        $this->assertEquals(
            $expected,
            Fibonacci::generate($limit)
        );
    }

    public function testGetIndexOf()
    {
        $limit = gmp_init(100);
        $expected = 12;
        $this->assertEquals(
            $expected,
            Fibonacci::getIndexLarge($limit)
        );
    }
}
