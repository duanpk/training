<?php

/*
    * The student grade is calculate from the marks with following conditions:
    *   If marks are 60% or more, grade will be First Division.
    *   If marks between 45% to 59%, grade will be Second Division.
    *   If marks between 33% to 44%, grade will be Third Division.
    *   If marks are less than 33%, student will be Fail.
    ? Write a function to output student grade.
 */
$mark = 80;
switch ($mark) {
    case $mark >= 60:
        echo "First Division\n";
        break;
    case $mark >= 45:
        echo "Second Division\n";
        break;
    case $mark >= 33:
        echo "Third Division\n";
        break;
    default:
        echo "Fail\n";
}
