<?php
class Employee{
    public $employeeName;
    public static $companyName="ABC Company";
    public static function info(){
        echo "<hr>Company: ".Employee::$companyName;
    }

}


$emp1=new Employee();

$emp1->employeeName="Ram";


echo "Employee Name: {$emp1->employeeName} <br>";
echo "Company Name: ".Employee::$companyName ;

Employee::info();

