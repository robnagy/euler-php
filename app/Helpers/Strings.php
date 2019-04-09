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
    public static function firstXChars($var, int $count) : string
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
    public static function lastXChars($var, int $count) : string
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
    public static function multiLineWordsToArrays(string $data) : array
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
    public static function sumOfIntString(string $data) : int
    {
        $sum = 0;
        for ($x = 0; $x < strlen($data); $x++) {
            $sum += (int) $data[$x];
        }
        return $sum;
    }
}
