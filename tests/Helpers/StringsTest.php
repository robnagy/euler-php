<?php

use App\Helpers\Strings;

class StringsTest extends TestCase
{
    public function testFirstXCharsOfString()
    {
        $string = "12345";
        $expected = "123";
        $count = 3;
        $this->assertEquals(
            $expected,
            Strings::firstXChars($string, $count)
        );
    }

    public function testLastXCharsOfString()
    {
        $string = "12345";
        $expected = "345";
        $count = 3;
        $this->assertEquals(
            $expected,
            Strings::lastXChars($string, $count)
        );
    }

    public function testMultiLineStringWordsToArrays()
    {
        $string = "1 2\n3 4";
        $expected = [[1, 2], [3, 4]];
        $this->assertEquals(
            $expected,
            Strings::multiLineWordsToArrays($string)
        );
    }

    public function testSumOfIntString()
    {
        $string = '666111444';
        $expected = 33;
        $this->assertEquals(
            $expected,
            Strings::sumOfIntString($string)
        );
    }

    public function testAlphabeticalValue()
    {
        $string = 'abcz';
        $expected = 1 + 2 + 3 + 26;
        $this->assertEquals(
            $expected,
            Strings::alphabeticalValue($string)
        );
    }

    public function testFindLargestRecurringSubString()
    {
        $string = 'qwert1234qwert1234qwert1234';
        $expected = 'qwert1234';
        $this->assertEquals(
            $expected,
            Strings::findLargestRecurringSequence($string)
        );
    }
}
