<?php
class Animal
{
    public $name;
    protected $color;
    private $weight;
}
$animal = new Animal;

$animal->name = "dog";
// $animal->color = "red";
$animal->weight = 15;

echo $animal->name;
