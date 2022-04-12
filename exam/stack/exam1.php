<?php

namespace Basic\Stack;

require_once '../../basic/stack/stack.php';

$str = 'ab aa aa bcd ab';
$stack = new Stack();

foreach (explode(' ', $str) as $item) {
    if ($stack->peek() == $item) {
        $stack->pop();
    } else {
        $stack->push($item);
    }
}
print_r($stack);
