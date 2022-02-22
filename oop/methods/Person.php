<?php
class Person{

    public function __construct()
    {
        echo "<br>Person instance is created.";
    }

    public function info(){
        echo "<br>Showing person info";
    }
}

$p1=new Person();
$p2=new Person();
new Person();

$p1->info();
