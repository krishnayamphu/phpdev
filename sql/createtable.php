<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="phpdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="CREATE TABLE admins (id int primary key auto_increment,username varchar(50) unique not null,password varchar(100) not null)";
if ($conn->query($sql) === TRUE) {
  echo "Table admins created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}