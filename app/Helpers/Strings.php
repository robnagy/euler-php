<?php

namespace App\Helpers;

class Strings
{
    /**
     * Returns the first $count number of chars from $var.
     * Accepts any $var castable to string.
     *
     * @param mixed $var
     * @param integer $count
     * @return string
     */
    public static function firstXChars($var, int $count): string
    {
        $temp = (string) $var;
        return substr($temp, 0, $count);
    }

    /**
     * Returns the last $count number of chars from $var.
     * Accepts any $var castable to string.
     *
     * @param mixed $var
     * @param integer $count
     * @return string
     */
    public static function lastXChars($var, int $count): string
    {
        $temp = (string) $var;
        return substr($temp, -$count);
    }

    /**
     * Converts $data into an array of arrays.
     * Expected format:
     * "A B C D\nC D E F"
     * Return format:
     * [['A', 'B', 'C', 'D'], ['C', 'D', 'E', 'F']]
     *
     * @param string $data
     * @return array
     */
    public static function multiLineWordsToArrays(string $data): array
    {
        $data = explode("\n", $data);
        foreach ($data as $index => $row) {
            $data[$index] = explode(' ', $row);
        }
        return $data;
    }

    /**
     * Returns the sum of a string of int
     *
     * @param string $data e.g. "1234"
     * @return integer e.g. 10
     */
    public static function sumOfIntString(string $data): int
    {
        $sum = 0;
        for ($x = 0; $x < strlen($data); $x++) {
            $sum += (int) $data[$x];
        }
        return $sum;
    }

    /**
     * Returns the sum of the lower case alphabetical
     * positions of each character in $word.
     * 'cxyz' = 3 + 24 + 25 + 26
     *
     * @param string $word
     * @return integer
     */
    public static function alphabeticalValue(string $word): int
    {
        $letters = str_split($word);
        $sum = 0;
        foreach ($letters as $letter) {
            $sum += ord(strtolower($letter)) - 96;
        }
        return $sum;
    }

    /**
     * Finds the largest recurring sequence contained within $text.
     * If $minLength is set, ignores sequences less than it.
     *
     * @param string $text
     * @param integer $minLength
     * @return string
     */
    public static function findLargestRecurringSequence(string $text, int $minLength = 2): string
    {
        $end = strlen($text) - 1;
        $recurring = '';
        for ($y = (int) $end / 2; $y > 2; $y--) {
            for ($x = 0; $x < $end - $y; $x++) {
                $section = substr($text, $x, $y);
                $section2 = substr($text, $x + $y, $y);
                if ($section === $section2) {
                    $recurring = $section;
                    if (strlen($section) < $minLength) {
                        break 2;
                    }
                }
            }
        }

        return $recurring;
    }
}
