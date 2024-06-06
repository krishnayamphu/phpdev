<?php
class Student
{
    public $name;
    public static $college_name = "ABC College";

    public static function address()
    {
        echo "<br>College Address: Kumaripati, Lalitpur";
    }
}

$s = new Student();
$s->name = "Ram";

echo Student::$college_name;
Student::address();
