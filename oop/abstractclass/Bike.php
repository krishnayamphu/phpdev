<?php


abstract class Bike
{
    //abstract method
   abstract public function intro();

   //non-abstract method
   public function test(){
       echo "Testing bike";
   }

}

class Honda extends Bike{

    public function intro()
    {
        echo "Honda Bike";
    }
}

class Hero extends Bike{

    public function intro()
    {
        echo "Hero Bike";
    }
}

$honda=new Honda();
$honda->intro();
echo "<br>";
$honda->test();

echo "<br>";

$hero=new Hero();
$hero->intro();
