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
}
