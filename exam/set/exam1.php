<?php

namespace Structure\Set;

require_once '../../data-structure/set/set.php';

$arr = [1, 2, 3, 4, 5, 2, -1, 5, 2, 7, 11, 11, -5];

$set = new Set();

foreach ($arr as $index => $value) {
    $set->add($value);
}

print_r($set->getElements());
