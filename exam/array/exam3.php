<?php

$matrix = [
    [1, 3, 5, 7, 9],
    [2, 4, 6, 8, 10],
    [11, 13, 15, 17, 19],
    [12, 14, 16, 18, 20],
    [21, 23, 25, 27, 29],
    [22, 24, 26, 28, 30]
];
$sum = 0;
$min = $matrix[0][0];
$max = $matrix[0][0];

foreach ($matrix as $row) {
    foreach ($row as $item) {
        $sum += $item;
        $min = min($min, $item);
        $max = max($max, $item);
    }
}

echo "Average: " . ($sum / count($matrix) / count($matrix[0])) . "\n";
echo "Min: " . $min . "\n";
echo "Max: " . $max . "\n";