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
}
