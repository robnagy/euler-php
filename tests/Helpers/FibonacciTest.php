<?php

use App\Helpers\Fibonacci;

class FibonacciTest extends TestCase
{
    public function testFibonacciGenerate()
    {
        $limit = 13;
        $expected = [1,2,3,5,8,13];
        $this->assertEquals(
            $expected,
            Fibonacci::generate($limit)
        );
    }

}
