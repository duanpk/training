<?php

namespace Algorithms\Search;

require_once '../../algorithms/search/sequential/sequential.php';

$arr = [1, 8, 31, 7, 9, 22, 5, 13, 5, 5];
$x = 5;

$pos = sequentialSearch($arr, $x);
echo $pos
    ? 'Found at position ' . $pos
    : 'Not found';
