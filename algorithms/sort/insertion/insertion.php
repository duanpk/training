<?php

namespace Algorithms\Sort;

require_once __DIR__ . '/../sort.php';

class Insertion extends Sort
{
    public static function sort($arr)
    {
        $len = count($arr);
        for ($i = 1; $i < $len; $i++) {
            $tmp = $arr[$i];
            for ($j = $i - 1; $j >= 0; $j--) {
                if ($tmp >= $arr[$j]) {
                    break;
                }
                $arr[$j + 1] = $arr[$j];
            }
            $arr[$j + 1] = $tmp;
        }
        return $arr;
    }

    public static function sortRecursive($arr, $start = 0, $end = null)
    {
        $len = count($arr);
        if ($end === null) {
            $end = $len - 1;
        }
        if ($start >= $end) {
            return $arr;
        }

        $min = $arr[$start];
        $minIndex = $start;
        for ($i = $start + 1; $i <= $end; $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
                $minIndex = $i;
            }
        }
        self::swap($arr, $start, $minIndex);

        return self::sortRecursive($arr, $start + 1, $end);
    }
}
