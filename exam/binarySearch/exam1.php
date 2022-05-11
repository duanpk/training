<?php

namespace Algorithms\Search;

function insertionSortUsingBinary($arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $l = 0;
        $r = $i - 1;
        $tmp = $arr[$i];
        while ($l <= $r) {
            $m = floor(($l + $r) / 2);
            if ($arr[$m] < $tmp) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }
        for ($j = $i - 1; $j >= $l; $j--) {
            $arr[$j + 1] = $arr[$j];
        }
        $arr[$l] = $tmp;
    }
    return $arr;
}

$arr = [8, 5, 2, 9, 5, 6, 3];
$arr = insertionSortUsingBinary($arr);
echo implode(', ', $arr);