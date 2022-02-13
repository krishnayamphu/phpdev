<?php
session_start();
require 'connectdb.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM users WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['del-success'] = "Data deleted successfully.";
    header('location:datatable.php');
    // echo "Data created successfully";
  } else {
    echo "Error in while deleting data: " . $conn->error;
  }
}
