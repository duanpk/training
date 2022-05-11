<?php

namespace Algorithms\Sort;

require_once __DIR__ . '/../sort.php';

class Quick extends Sort
{
    public static function sort($arr, $left = 0, $right = null)
    {
        $right = $right ?? count($arr) - 1;
        if ($left >= $right) {
            return $arr;
        }
        $pivot = $arr[$right];
        $i = $left;
        $j = $right;
        while ($i < $j) {
            while ($i < $j && $arr[$i] <= $pivot) {
                $i++;
            }
            while ($i < $j && $arr[$j] >= $pivot) {
                $j--;
            }
            if ($i < $j) {
                self::swap($arr, $i, $j);
            }
        }
        self::swap($arr, $i, $right);
        $res = self::sort($arr, $left, $i - 1);
        $res = self::sort($res, $i + 1, $right);

        return $res;
    }
}
