<?php
require 'connectdb.php';

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Id: " . $row["id"];
    echo ", Username:" . $row["username"];
    echo ", Password:" . $row["password"]. "<hr>";
  }
} else {
  echo "0 results";
}