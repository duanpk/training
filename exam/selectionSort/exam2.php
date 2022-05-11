<?php

namespace Algorithms\Sort;

require_once '../../algorithms/sort/selection/selection.php';

$arr = [8, 22, 7, 9, 31, 5, 13];

print_r(Selection::sortRecursive($arr));
