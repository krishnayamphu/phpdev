<?php
class Employee
{
    public $name;
    public $salary;

    //method
    function employeeInfo()
    {
        echo "<br>Employee Name: " . $this->name;
        echo "<br>Employee Salary: " . $this->salary;
    }
}

$e = new Employee();
$e->name = "Mohan";
$e->salary = 1000;
$e->employeeInfo();
