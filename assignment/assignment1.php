<?php
abstract class IMath
{
    private $number1;
    private $number2;

    public function getNumber1()
    {
        return $this->number1;
    }

    public function getNumber2()
    {
        return $this->number2;
    }

    public function setNumber1($number1)
    {
        $this->number1 = $number1;
    }

    public function setNumber2($number2)
    {
        $this->number2 = $number2;
    }

    public function __construct(...$args)
    {
        $this->setNumber1($args[0] ?? 10);
        $this->setNumber2($args[1] ?? 5);
    }
    abstract public function calculate();
}
class Addition extends IMath
{
    public function calculate()
    {
        return $this->getNumber1() + $this->getNumber2();
    }
}
class Subtraction extends IMath
{
    public function calculate()
    {
        return $this->getNumber1() - $this->getNumber2();
    }
}
class Multiplication extends IMath
{
    public function calculate()
    {
        return $this->getNumber1() * $this->getNumber2();
    }
}
class Division extends IMath
{
    public function calculate()
    {
        return $this->getNumber1() / $this->getNumber2();
    }
}

$mul = new Multiplication(10, 20);
echo $mul->calculate() . "\n";

$add = new Addition(10, 20);
echo $add->calculate() . "\n";

$sub = new Subtraction();
echo $sub->calculate() . "\n";

$div = new Division();
echo $div->calculate() . "\n";
