<?php
require 'connectdb.php';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hash=md5($password);
    
    $sql="INSERT INTO users VALUES(null,'$username','$hash')";

    if ($conn->query($sql) === TRUE) {
      header('location:datatable.php');
      // echo "Data created successfully";
    } else {
      echo "Error inserting data: " . $conn->error;
    }
}
