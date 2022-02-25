<?php
require 'Person.php';

use iterable\Person;

class IterableDemo{

    public function getColors(iterable $colors){
        foreach ($colors as $color){
            echo"color: $color <br>";
        }
    }


    public function showPersons(iterable $persons){
        foreach ($persons as $person){
            echo"Name: $person->name <br>";
            echo"Age: $person->age <br>";
            echo"<hr>";
        }
    }

}

$colors=Array("Red","Green","Blue");


$id=new IterableDemo();

$id->getColors($colors);
echo "<br>";
$allPersons=Array(
    new Person("Ram",20),
    new Person("Sita",19),
    new Person("Hari",18)
);
$id->showPersons($allPersons);


