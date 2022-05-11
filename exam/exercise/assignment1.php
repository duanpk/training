<?php

namespace Algorithms\Assignment;

class Student
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}



$classA = [
    new Student('Andes', 35),
    new Student('Maria', 30),
    new Student('Trujillo', 35),
    new Student('Ana', 46),
    new Student('Moreno', 40),
    new Student('Antonio', 42),
    new Student('Thomas', 11),
    new Student('Christina', 27),
    new Student('Juan', 31),
    new Student('Hardy', 9)
];

function quickSort(&$arr, $left = 0, $right = null)
{
    $right = $right ?? count($arr) - 1;
    if ($left >= $right) return;
    $pivot = $arr[$right];
    $i = $left;
    $j = $right;
    while ($i < $j) {
        while ($i < $j && $arr[$i]->age <= $pivot->age) {
            $i++;
        }
        while ($i < $j && $arr[$j]->age >= $pivot->age) {
            $j--;
        }
        if ($i < $j) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }
    }
    $tmp = $arr[$i];
    $arr[$i] = $arr[$right];
    $arr[$right] = $tmp;
    quickSort($arr, $left, $i - 1);
    quickSort($arr, $i + 1, $right);
}

quickSort($classA);
echo "Two smallest  students are " . $classA[0]->name . " and " . $classA[1]->name
    . " with age " . $classA[0]->age . " and " . $classA[1]->age . PHP_EOL;
