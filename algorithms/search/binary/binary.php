<?php

namespace Algorithms\Search;

function binarySearch($arr, $target)
{
    $len = count($arr);
    $left = 0;
    $right = $len - 1;
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        if ($arr[$mid] === $target) {
            return $mid;
        }
        if ($arr[$mid] > $target) {
            $right = $mid - 1;
        } else {
            $left = $mid + 1;
        }
    }
    return -1;
}

function binarySearchRecursive($arr, $target, $left = 0, $right = null)
{
    $right = $right ?? count($arr) - 1;
    if ($left > $right) {
        return -1;
    }
    $mid = floor(($left + $right) / 2);
    if ($arr[$mid] === $target) {
        return $mid;
    }
    return $arr[$mid] > $target
        ? binarySearchRecursive($arr, $target, $left, $mid - 1)
        : binarySearchRecursive($arr, $target, $mid + 1, $right);
}
