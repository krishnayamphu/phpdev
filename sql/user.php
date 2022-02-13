<?php
require 'connectdb.php';
$id=$_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>

<nav>
    <a href="datatable.php">All Users</a>
</nav>

<form action="update-user.php" method="post">
<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Username:
    <input type="text" name="username" value="<?php echo $row["username"]; ?>" required><br><br>
    Password:
    <input type="password" name="password" value="<?php echo $row["password"]; ?>" required><br><br>
    <?php } ?>
    <button type="submit" name="submit">Update</button>
</form>
    
</body>
</html>