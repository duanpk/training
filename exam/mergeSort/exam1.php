<?php

namespace Algorithms\Sort;

require_once '../../algorithms/sort/merge/merge.php';

$arr = [8, 22, 7, 9, 31, 5, 13];

print_r($res = Merge::sort($arr));
echo $res[count($res) - 1] + $res[count($res) - 2];
