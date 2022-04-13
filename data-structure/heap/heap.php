<?php

namespace Structure\Heap;

function heapify(&$arr, $i, $size)
{
    $left = 2 * $i + 1;
    $right = 2 * $i + 2;
    $largest = $i;

    if ($left < $size && $arr[$left] > $arr[$largest]) {
        $largest = $left;
    }

    if ($right < $size && $arr[$right] > $arr[$largest]) {
        $largest = $right;
    }

    if ($largest != $i) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $tmp;
        heapify($arr, $largest, $size);
    }
}

function heapSort(&$arr, $count = null)
{
    $size = count($arr);
    $count = $count ?? $size;

    // Build heap
    for ($i = floor($size / 2) - 1; $i >= 0; $i--) {
        heapify($arr, $i, $size);
    }

    // Sort
    for ($i = $size - 1; $i >= 0; $i--) {
        if ($count == 0) return;
        $count--;
        echo $arr[0] . ' ';
        $tmp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $tmp;
        heapify($arr, 0, $i);
    }
}

$arr = [20, 43, 65, 88, 11, 33, 56, 74];
heapSort($arr, 2);
