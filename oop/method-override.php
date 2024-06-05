<?php
class Animal
{
    function info()
    {
        echo "show animal info";
    }
}
class Dog extends Animal
{
    public $age;

    //method override
    function info()
    {
        echo "showing dog info";
    }
}

$dog = new Dog;
$dog->info();
