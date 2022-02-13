<?php
session_start();
require 'connectdb.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $hash = md5($password);

  $sql = "UPDATE users SET username='$username',password='$hash' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['update-success'] = "Data Updated successfully.";
    header('location:datatable.php');
    // echo "Data created successfully";
  } else {
    echo "Error in while updating data: " . $conn->error;
  }
}
