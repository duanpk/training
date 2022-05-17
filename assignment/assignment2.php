<?php

/**
 * Solve the Linear equation: ax + b = 0
 *
 * @param   float  $a  coefficient of x
 * @param   float  $b  coefficient of 1
 *
 * @return  float      root of the equation
 */
function findX1($a, $b) {
    if ($a == 0) {
        return "a cannot be 0";
    }
    return -$b / $a;
}
echo findX1(10, 20) . "\n";