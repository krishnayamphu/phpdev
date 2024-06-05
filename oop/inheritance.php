<?php
class Animal
{
    public $name;
}
class Dog extends Animal
{
    public $age;
}

$dog = new Dog;
$dog->name = "Puppy";

echo $dog->name;
