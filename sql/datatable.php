<?php session_start(); ?>
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
    .alert{
      color:green;
      background-color:#ccc;
      padding:8px 15px;
      border:1px solid green;
      display:inline-block;
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


<?php if(isset($_SESSION['del-success'])){
  echo "<p class='alert'>".$_SESSION['del-success']."</p>";
  unset($_SESSION['del-success']);
} ?>

<?php if(isset($_SESSION['update-success'])){
  echo "<p class='alert'>".$_SESSION['update-success']."</p>";
  unset($_SESSION['update-success']);
} ?>

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
      <a href="user.php?id=<?php echo $row["id"]; ?>">Edit</a>
     
      <form method="POST" action="del-user.php">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <button type="submit" name="submit">Delete</button>
      </form>
  </td>
  </tr>
<?php } ?>
</table>
</body>
</html>
