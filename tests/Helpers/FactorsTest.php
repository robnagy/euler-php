<?php

use App\Helpers\Factors;

class FactorsTest extends TestCase
{
    public function testGetPrimeFactors()
    {
        $int = 15;
        $expected = [3,5];
        $this->assertEquals(
            $expected,
            Factors::getPrimeFactors($int)
        );
    }

    public function testGetPrimeFactorsWithExponents()
    {
        $int = 20;
        $expected = [2 => 2, 5 => 1];
        $this->assertEquals(
            $expected,
            Factors::getPrimeFactorsWithExponents($int)
        );
    }

    public function testIsX17AFactorOf170()
    {
        $num = 170;
        $x = 17;
        $expected = true;
        $this->assertEquals(
            $expected,
            Factors::isXAFactor($x, $num)
        );
    }

    // public function testIs2AFactor()
    // {
    //     $num = 28;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is2AFactor($num)
    //     );
    //     $num = 27;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is2AFactor($num)
    //     );
    // }

    // public function testIs3AFactorOf27()
    // {
    //     $num = 27;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is3AFactor($num)
    //     );
    // }

    // public function testIs3AFactorOf28()
    // {
    //     $num = 28;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is3AFactor($num)
    //     );
    // }

    // public function testIs4AFactorOf40()
    // {
    //     $num = 40;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is4AFactor($num)
    //     );
    // }

    // public function testIs4AFactorOf400()
    // {
    //     $num = 400;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is4AFactor($num)
    //     );
    // }

    // public function testIs4AFactorOf39()
    // {
    //     $num = 39;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is4AFactor($num)
    //     );
    // }

    // public function testIs5AFactorOf39()
    // {
    //     $num = 39;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is5AFactor($num)
    //     );
    // }

    // public function testIs5AFactorOf50()
    // {
    //     $num = 50;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is5AFactor($num)
    //     );
    // }

    // public function testIs6AFactorOf60()
    // {
    //     $num = 60;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is6AFactor($num)
    //     );
    // }

    // public function testIs6AFactorOf61()
    // {
    //     $num = 61;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is6AFactor($num)
    //     );
    // }

    // public function testIs7AFactorOf70()
    // {
    //     $num = 70;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is7AFactor($num)
    //     );
    // }

    // public function testIs7AFactorOf134()
    // {
    //     $num = 134;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is7AFactor($num)
    //     );
    // }

    // public function testIs8AFactorOf80()
    // {
    //     $num = 80;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is8AFactor($num)
    //     );
    // }

    // public function testIs8AFactorOf81()
    // {
    //     $num = 81;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is8AFactor($num)
    //     );
    // }

    // public function testIs8AFactorOf1000000000000888()
    // {
    //     $num = 1000000000000888;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is8AFactor($num)
    //     );
    // }

    // public function testIs9AFactorOf99()
    // {
    //     $num = 99;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is9AFactor($num)
    //     );
    // }

    // public function testIs9AFactorOf1001()
    // {
    //     $num = 1001;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is9AFactor($num)
    //     );
    // }

    // public function testIs10AFactorOf100()
    // {
    //     $num = 100;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is10AFactor($num)
    //     );
    // }

    // public function testIs10AFactorOf101()
    // {
    //     $num = 101;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is10AFactor($num)
    //     );
    // }

    // public function testIs11AFactorOf121()
    // {
    //     $num = 121;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is11AFactor($num)
    //     );
    // }

    // public function testIs11AFactorOf122()
    // {
    //     $num = 122;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is11AFactor($num)
    //     );
    // }

    public function testIsX120AFactorOf124800()
    {
        $num = 124800;
        $x = 12;
        $expected = true;
        $this->assertEquals(
            $expected,
            Factors::isXAFactor($x, $num)
        );
    }

    public function testIsX120AFactorOf124801()
    {
        $num = 124801;
        $x = 12;
        $expected = false;
        $this->assertEquals(
            $expected,
            Factors::isXAFactor($x, $num)
        );
    }

    // public function testIs13AFactorOf143()
    // {
    //     $num = 143;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is13AFactor($num)
    //     );
    // }

    // public function testIs13AFactorOf134()
    // {
    //     $num = 134;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is13AFactor($num)
    //     );
    // }

    public function testIsX14AFactorOf154()
    {
        $num = 154;
        $x = 14;
        $expected = true;
        $this->assertEquals(
            $expected,
            Factors::isXAFactor($x, $num)
        );
    }

    public function testIsX14AFactorOf134()
    {
        $num = 134;
        $x = 14;
        $expected = false;
        $this->assertEquals(
            $expected,
            Factors::isXAFactor($x, $num)
        );
    }

    // public function testIs16AFactorOf162()
    // {
    //     $num = 16002;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is16AFactor($num)
    //     );
    // }

    // public function testIs16AFactorOf160()
    // {
    //     $num = 16000;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is16AFactor($num)
    //     );
    // }

    // public function testIs17AFactorOf172()
    // {
    //     $num = 17002;
    //     $expected = false;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is17AFactor($num)
    //     );
    // }

    // public function testIs17AFactorOf170()
    // {
    //     $num = 17000;
    //     $expected = true;
    //     $this->assertEquals(
    //         $expected,
    //         Factors::is17AFactor($num)
    //     );
    // }

    public function testGetFactorsBrute()
    {
        $num = 10;
        $expected = [1,2,5,10];
        $this->assertEquals(
            $expected,
            Factors::getFactorsBrute($num)
        );
    }

    public function testNumberOfFactors()
    {
        $num = 10;
        $expected = 4;
        $this->assertEquals(
            $expected,
            Factors::numberOfFactors($num)
        );
    }

    public function testProperFactors()
    {
        $num = 220;
        $expected = [1,2,4,5,10,11,20,22,44,55,110];
        $this->assertEquals(
            $expected,
            Factors::getProperFactors($num)
        );
    }
}
