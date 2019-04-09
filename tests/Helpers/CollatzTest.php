<?php

use App\Helpers\Collatz;

class CollatzTest extends TestCase
{
    public function testSequence13()
    {
        $start = 13;
        $expected = 9;

        $this->assertEquals(
            $expected,
            Collatz::sequence($start)
        );
    }
}
