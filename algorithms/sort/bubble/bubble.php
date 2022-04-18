<?php

namespace Algorithms\Sort;

require_once __DIR__ . '/../sort.php';

class Bubble extends Sort
{
    public static function sort($arr)
    {
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    self::swap($arr, $i, $j);
                }
            }
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

        for ($i = $start + 1; $i <= $end; $i++) {
            if ($arr[$i] < $arr[$start]) {
                self::swap($arr, $i, $start);
            }
        }

        return self::sortRecursive($arr, $start + 1, $end);
    }
}
