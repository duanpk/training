<?php

namespace Algorithms\Sort;

require_once __DIR__ . '/../sort.php';

class Merge extends Sort
{
    public static function sort($arr)
    {
        $len = count($arr);
        if ($len <= 1) {
            return $arr;
        }
        $mid = floor($len / 2);
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);
        $left = self::sort($left);
        $right = self::sort($right);
        return self::merge($left, $right);
    }

    private static function merge($left, $right)
    {
        $result = [];
        while (count($left) > 0 && count($right) > 0) {
            $ele = $left[0] < $right[0] ? array_shift($left) : array_shift($right);
            array_push($result, $ele);
        }
        while (count($left) > 0) {
            array_push($result, array_shift($left));
        }
        while (count($right) > 0) {
            array_push($result, array_shift($right));
        }
        return $result;
    }
}
