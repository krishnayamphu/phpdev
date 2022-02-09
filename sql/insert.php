<?php
require 'connectdb.php';

$sql="INSERT INTO users VALUES(null,'abc','a123')";

if ($conn->query($sql) === TRUE) {
  echo "Data created successfully";
} else {
  echo "Error inserting data: " . $conn->error;
}