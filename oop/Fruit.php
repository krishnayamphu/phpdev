<?php
class Fruit
{
    public $name;  //properties

    //method
    function test()
    {
        echo "<br>Testing something";
    }
}

//create an object
$apple = new Fruit();
$apple->name = "Apple";

echo "Fruit Name: " . $apple->name;
$apple->test();
