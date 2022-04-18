<?php

namespace Algorithms\Sort;

require_once __DIR__ . '/../sort.php';

class Selection extends Sort
{
    public static function sort($arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            self::swap($arr, $i, $min);
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
