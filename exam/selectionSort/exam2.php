<?php

namespace Algorithms\SelectionSort;

use Algorithms\Sort\Selection;
use Algorithms\Sort\Sort;

require_once '../../algorithms/selectionSort/selection.php';

$arr = [8, 22, 7, 9, 31, 5, 13];

print_r(Selection::sortRecursive($arr));
