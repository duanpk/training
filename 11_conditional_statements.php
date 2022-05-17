<?php

$age = 20;
echo $age < 30 ? "I am still young\n" : "I am not too young\n";

$num = 10;
echo 0 === $num % 2 ? "Even\n" : "Odd\n";

$week = 4;
switch ($week) {
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;
    default:
        echo "Invalid week\n";
}