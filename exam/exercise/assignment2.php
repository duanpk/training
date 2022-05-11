<?php

namespace Algorithms\Assignment;

require_once './assignment1.php';

$classB = array(
    new Student('Andes', 11),
    new Student('Maria', 6),
    new Student('Trujillo', 2),
    new Student('Ana', 3),
);

$classA = array(
    new Student('Christina', 5),
    new Student('Juan', 6),
    new Student('Hardy', 3)
);
$k = 3;

quickSort($classA);
quickSort($classB);

$arrIndexB = array_fill(0, count($classA) + 1, 0);
// print_r($arrIndexB);
echo "K th pairs youngest students are\n";
while ($k > 0) {
    $minSum = PHP_INT_MAX;
    $minIndex = 0;

    foreach ($classA as $indexA => $studentA) {
        $pointerB = $arrIndexB[$indexA];
        if (
            $minSum > $studentA->age + $classB[$pointerB]->age
            && $arrIndexB[$indexA] < count($classB)
        ) {
            $minSum = $studentA->age + $classB[$pointerB]->age;
            $minIndex = $indexA;
        }
    }
    echo $classA[$minIndex]->name . " " . $classB[$arrIndexB[$minIndex]]->name . "\n";
    $arrIndexB[$minIndex]++;
    $k--;
}
