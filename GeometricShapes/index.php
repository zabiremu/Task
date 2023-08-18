<?php
// Abstract class representing a generic geometric shape
abstract class Shape {
    abstract public function calculate();
}

// Circle class
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculate() {
        return pi() * $this->radius * $this->radius;
    }
}

// Rectangle class
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculate() {
        return $this->width * $this->height;
    }
}

// Usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->calculate();
echo"<br/>";
echo "Rectangle Area: " . $rectangle->calculate();
