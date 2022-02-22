<?php
class Student{
//    public function __construct()
//    {
//        echo "Student object is created.<br>";
//    }
    public function __construct($name)
    {
        echo "Student name is: $name.<br>";
    }

    public function __destruct()
    {
        echo "object destroy succefully.";
    }
}

$std=new Student("Ram");
$std=new Student("Sita");

