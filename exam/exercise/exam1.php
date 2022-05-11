<?php

namespace Algorithms\Sort;

require_once '../../algorithms/sort/quick/quick.php';

$arr = [1, 8, 31, 7, 9, 22, 5, 13, 5, 5];
$k = 3;

$arr = Quick::sort($arr);
echo "k'th smallest element is " . $arr[$k - 1];
