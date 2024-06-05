<?php
final class Animal
{
    final function info()
    {
        echo "show animal info";
    }
}
class Dog extends Animal
{
    //method override
    // function info()
    // {
    //     echo "showing dog info";
    // }
}

$dog = new Dog;
$dog->info();
