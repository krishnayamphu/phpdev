<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdev";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>

    <form action="user-update.php" method="post">

        <?php
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) :
        ?>

            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $row['username'] ?>">
            <br><br>
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $row['password'] ?>">
        <?php
        endwhile
        ?>
        <br><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>

</html>