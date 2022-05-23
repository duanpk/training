<?php
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


$classA = array(
    new Student('Anders', 25),
    new Student('Maria', 30),
    new Student('Trujillo', 35),
    new Student('Ana', 46),
    new Student('Moreno', 40),
    new Student('Antonio', 40),
    new Student('Thomas', 11),
    new Student('Christina', 27),
    new Student('Berglund', 31),
    new Student('Hardy', 9)
);

// print_r($classA);
