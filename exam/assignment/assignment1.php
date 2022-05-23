<?php

namespace Structure\Set;

require_once '../../data-structure/set/set.php';
require_once './student.php';

$age = new Set();
foreach ($classA as $student) {
    $age->add($student->age);
}

$age->print();
