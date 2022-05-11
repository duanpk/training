<?php

namespace Algorithms\Sort;

$arr = [5, 6, 0, 2, 3, 4];

function findMinium($arr, $l, $r)
{
    if ($arr[$r] >= $arr[$l]) {
        return $arr[$l];
    }
    $m = floor(($l + $r) / 2);
    if ($arr[$m] >= $arr[$r]) {
        return findMinium($arr, $m + 1, $r);
    }
    return findMinium($arr, $l, $m);
}

echo findMinium($arr, 0, count($arr) - 1);
