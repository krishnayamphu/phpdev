<?php
/*
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

$name = "John";  //string
$age = 20; //int
$salary = 25000.00; //decimal/float
$bool = false;
$num = [10, 20, 30];

echo "Employee Name: " . $name;
echo "<br>Employee Age: " . $age;
echo "<br>Employee Salary: " . $salary;
echo "<br>" . $bool;
echo "<br>";

var_dump($bool);
echo ("<br>");
var_dump($num);
