<?php

/**
 * Solve the Quadratic equation: ax^2 + bx + c = 0
 *
 * @param   float  $a  coefficient of x^2
 * @param   float  $b  coefficient of x
 * @param   float  $c  coefficient of 1
 *
 * @return  mixed      root of the equation
 */
function findX2($a, $b, $c)
{
    if ($a == 0) {
        return "a cannot be 0";
    }
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "no solution";
    }
    if ($delta == 0) {
        return -$b / (2 * $a);
    }
    return [
        (-$b + sqrt($delta)) / (2 * $a),
        (-$b - sqrt($delta)) / (2 * $a)
    ];
}
print_r(findX2(1, -3, 2));
