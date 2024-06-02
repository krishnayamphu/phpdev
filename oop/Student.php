<?php
class Student
{
    public $name;
    public $age;

    //method
    function stdInfo()
    {
        echo "<br>Showing Student Info";
    }
}

$s1 = new Student();
$s2 = new Student();

$s1->name = "Ram";
$s1->age = 20;

$s2->name = "Hari";
$s2->age = 19;

echo "<br>Name: " . $s1->name . "<br>Age: " . $s1->age;
echo "<br>Name: " . $s2->name . "<br>Age: " . $s2->age;

$s1->stdInfo();

$s2->stdInfo();
