<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [-1, -2, -3, -4, -5, -6, -7, -8, -9, -10];
$arr3 = [];
foreach ($arr2 as $index => $value) {
    $arr3[] = $value + $arr1[$index];
}
print_r($arr3);
