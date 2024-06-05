<?php
abstract class Shape
{
    abstract public function draw();
}

class Circle extends Shape
{
    public function draw()
    {
        echo "drawing circle";
    }
}

class Rectangle extends Shape
{
    public function draw()
    {
        echo "drawing rectangle";
    }
}

$circle = new Circle();
$circle->draw();

echo "<br>";

$rect = new Rectangle();
$rect->draw();
