<?php

function square($n)
{
    if ($n == 1) return 1;
    return square($n - 1) + $n + $n - 1;
}

echo square(20);
