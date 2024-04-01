<?php
abstract class Shape
{
    abstract public function calculateArea();
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}

$circle = new Circle(5);
echo "Area of circle: " . $circle->calculateArea() . "<br>";
$rectangle = new Rectangle(4, 6);
echo "Area of rectangle: " . $rectangle->calculateArea();
?>