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

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO users VALUES(null,'$username','$password')";
    
    if ($conn->query($sql) === TRUE) {
      header('location:datatable.php');
      // echo "Data created successfully";
    } else {
      echo "Error inserting data: " . $conn->error;
    }
}
