<?php

namespace Basic\Set;

require_once '../../basic/set/set.php';

$dictionary = new Set();
$count = 0;
$day = [
    ['hello', 'hi', 'good morning', 'good night'],
    ['hi', 'name', 'age'],
    ['good morning', 'how are you', 'fine', 'thank']
];

foreach ($day as $index => $date) {
    foreach ($date as $word) {
        $dictionary->add($word);
    }
    echo 'Date ' . ($index + 1) . ': ';
    $dictionary->print();
    echo "\n";
}
