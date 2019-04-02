<?php

namespace App\Helpers;

class Arrays
{
    /**
     * Merges values of two non-keyed
     * arrays, removes duplicates,
     * returns non-keyed array.
     *
     * @param array $arr1
     * @param array $arr2
     * @return array
     */
    public static function mergeValues(array $arr1, array $arr2) : array
    {
        return array_values(array_unique(array_merge($arr1, $arr2)));
    }

    /**
     * Removes elements in an array that aren't even numbers.
     *
     * @param array $array
     * @return array
     */
    public static function filterForEvenNumbers(array $array) : array
    {
        $array = array_filter($array, function($num) {
            if (is_int($num))
                return Numbers::isEven($num);
        });
        $array = array_values($array);
        return $array;
    }
}
