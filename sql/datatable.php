<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Users</title>
  <style>
    table{
      border-collapse:collapse;
    }
    th,td{
      border:1px solid #ccc;
      padding:5px 15px;
    }
  </style>
</head>
<body>
<nav>
  <a href="register.php">Add User</a>
</nav>
<?php
require 'connectdb.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<table>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Action</th>
  </tr>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td>
      <a href="#">Edit</a>
      <a href="#">Delete</a>
  </td>
  </tr>
<?php } ?>
</table>
</body>
</html>
