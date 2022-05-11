<?php

namespace Algorithms\Sort;

require_once '../../algorithms/sort/quick/quick.php';

$arr1 = [1, 8, 31, 7, 9, 22, 5, 13, 5];
$arr2 = [8, 31, 7, 9, 22, 5, 13, 2];
$k = 3;

$arr1 = Quick::sort($arr1);
$arr2 = Quick::sort($arr2);

$arrIndex2 = array_fill(0, count($arr1) + 1, 0);

echo "K th pairs youngest students are\n";
while (($k > 0)) {
    $minSum = PHP_INT_MAX;
    $minIndex = 0;

    foreach ($arr1 as $index1 => $ele1) {
        $index2 = $arrIndex2[$index1];
        if ($index2 < count($arr2) && $minSum > $ele1 + $arr2[$index2]) {
            $minSum = $ele1 + $arr2[$index2];
            $minIndex = $index1;
        }
    }
    echo $arr1[$minIndex] . " " . $arr2[$arrIndex2[$minIndex]] . "\n";
    $arrIndex2[$minIndex]++;
    $k--;
}
