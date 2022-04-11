<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$min = $arr[0];
$max = $arr[0];
foreach ($arr as $item) {
    $sum += $item;
    $min = min($min, $item);
    $max = max($max, $item);
}
echo "Average: " . ($sum / count($arr)) . "\n";
echo "Min: " . $min . "\n";
echo "Max: " . $max . "\n";
