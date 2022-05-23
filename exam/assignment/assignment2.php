<?php

namespace Structure\Set;

require_once './student.php';
require_once '../../data-structure/set/set.php';

class NewStructure extends Set
{
    public function add($key, $value = '')
    {
        $this->elements[$key][] = $value;
    }

    public function getItem($key)
    {
        if (isset($this->elements[$key])) {
            return $this->elements[$key];
        }
        return [];
    }
}

$age = new NewStructure();

foreach ($classA as $student) {
    $age->add($student->age, $student->name);
}

print_r($age->getItem(10));