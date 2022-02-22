<?php
class Animal
{
    public $legs;
    function eat(){
        echo "Eat something";
    }
}

$dog=new Animal();
$dog->legs=4;


echo "Dog's Legs: {$dog->legs} <br>";
echo "Dog meal:";

echo "{$dog->eat()}";

