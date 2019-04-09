<?php

use App\Helpers\NumbersToWords;

class NumbersToWordsTest extends TestCase
{
    public function testToWordString342()
    {
        $num = 342;
        $expected = 'three hundred and forty two';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }

    public function testToWordString380()
    {
        $num = 380;
        $expected = 'three hundred and eighty';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }

    public function testToWordString12()
    {
        $num = 12;
        $expected = 'twelve';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }
    public function testToWordString102()
    {
        $num = 102;
        $expected = 'one hundred and two';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }
    public function testToWordString1005()
    {
        $num = 1005;
        $expected = 'one thousand and five';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }
    public function testToWordString2015()
    {
        $num = 2015;
        $expected = 'two thousand and fifteen';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }

    public function testToWordString3333()
    {
        $num = 3333;
        $expected = 'three thousand three hundred and thirty three';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }

    public function testToWordString33333()
    {
        $this->expectExceptionMessage('Number larger than max allowed (9999)');
        $num = 33333;
        $expected = 'thirty three thousand three hundred and thirty three';
        $numbersToWords = new NumbersToWords($num);
        $this->assertEquals(
            $expected,
            $numbersToWords->convert()
        );
    }
}
