<?php
abstract class Geometry
{
    private $width;
    private $height;

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function __construct(...$args)
    {
        $this->setWidth($args[0] ?? 10);
        $this->setHeight($args[1] ?? 5);
    }

    abstract public function area();
}

class Triangle extends Geometry
{
    public function area()
    {
        return ($this->getWidth() * $this->getHeight()) / 2;
    }
}

class Rectangle extends Geometry
{
    public function area()
    {
        return $this->getWidth() * $this->getHeight();
    }
}

$triangle = new Triangle();
echo $triangle->area() . "\n";

$rectangle = new Rectangle(10, 20);
echo $rectangle->area() . "\n";
