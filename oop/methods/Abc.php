<?php


class Abc
{
    //method (function)
    public function test()
    {
        echo "Testing something";
    }

    public function test1($name){
        echo "<br>Name: $name";
    }

    //method with default value
    public function info($name="ABC"){
        echo "<br>Your Name: $name";
    }

    public function getMaxAge(){
        return 100;
    }

    public function getAddress($address){
        return $address;
    }
}

$obj=new Abc();

$obj->test(); //method calling
$obj->test1("Ram");
$obj->test1("Sita");
$obj->info("Gita");
$obj->info();

$maxAge=$obj->getMaxAge();
echo "<br>Maximum Age: $maxAge";


echo "<br>Address: {$obj->getAddress('KTM')}";
echo "<br>Address: {$obj->getAddress('POKHARA')}";
