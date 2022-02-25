<?php
require 'Book/Book.php';
require 'Student/Student.php';
require 'Student/Address.php';

use Student\Student;
use Student\Address as A;



$book=new \Book\Book("PHP Development",200);
$book->getBookInfo();

echo "<br>";

$student=new Student("Ram",10);
$student->studentInfo();

echo "<br>";

$address=new A("Kumaripati, Lalitpur");
$address->getAddress();

