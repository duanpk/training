<?php

namespace Algorithms\Search;

function sequentialSearch($arr, $target)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] === $target) {
            return $i;
        }
    }
    return -1;
}
