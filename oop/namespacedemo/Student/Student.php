<?php


namespace Student;


class Student
{
    public $name;
    public $rollno;

    public function __construct($name, $rollno)
    {
        $this->name = $name;
        $this->rollno = $rollno;
    }

    public function studentInfo(){
        echo "Student Name: $this->name";
        echo "<br>";
        echo "Student Rollno: $this->rollno";
    }


}
