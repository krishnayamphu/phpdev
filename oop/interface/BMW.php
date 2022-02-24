<?php
interface Sound{
    public function playSound();
}
interface Car{
    public function intro($name);
}

class BMW implements Car,Sound
{

    public function intro($name)
    {
        echo "Hello I'm a $name car";
    }

    public function playSound()
    {
        echo "playing some music";
    }
}

class Hundai implements Car {

    public function intro($name)
    {
        echo "Hello I'm a $name car";
    }
}

$bmw=new BMW();
$bmw->intro("BMW");
$bmw->playSound();

echo "<br>";
$hundai=new Hundai();
$hundai->intro("Hundai");
