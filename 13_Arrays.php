<?php

// * Find max and min value in an array
$a = [3, 4, 1, 19, 20, 99];
$a[] = 5;
$a[0] = 10;
echo "max value: " . max($a) . "\n";
echo "min value: " . min($a) . "\n";

// * Find average value
$a = [3, 4, 1, 19, 20, 99];
echo "average value: " . array_sum($a) / count($a) . "\n";

// * Calculate the sum of all the values in the array
$a = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];
$sum = 0;
foreach ($a as $row) {
    $sum += array_sum($row);
}
echo "sum: $sum\n";

// * Find the most frequent value in an array
$a = [34, 2, 34, 1, 12, 16, 2, 8, 2];
$count = array_count_values($a);
echo "most frequent value: " . array_search(max($count), $count) . "\n";

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    if ($num != 2 && $num % 2 == 0) {
        return false;
    }
    for ($i = 3; $i <= ceil(sqrt($num)); $i += 2) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "prime numbers: ";
foreach ($a as $value) {
    if (isPrime($value)) {
        echo "$value ";
    }
}
