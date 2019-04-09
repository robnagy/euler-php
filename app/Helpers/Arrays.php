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

    /**
     * Returns the product of items in $array
     *
     * @param array $array
     * @return integer
     */
    public static function arrayProduct(array $array) : int
    {
        $product = 1;
        foreach ($array as $item) $product *= $item;
        return $product;
    }

    /**
     * Returns the first $limit chars of the
     * sum of strings in $data array.
     *
     * e.g. ['1111', '2222', '3333'], $limit = 3
     * Returns 666 instead of 6666.
     *
     * @param array $data
     * @param integer $limit
     * @return string
     */
    public static function arraySumPartial(array $data, int $limit) : string
    {
        $sum = 0;
        $lastResult = -1;
        $cutOff = $limit;
        while ($sum != $lastResult)
        {
            $lastResult = $sum;
            $sum = 0;
            foreach ($data as $row) {
                $sum += (int) substr($row, 0, $cutOff);
            }
            $sum = substr((string)$sum, 0, $limit);
            $cutOff++;
        }
        return $sum;
    }
}
