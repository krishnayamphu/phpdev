<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdev";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = md5($password);
    $sql = "UPDATE users SET username='$username',password='$hash' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    echo $result;
    if ($result == 1) {
        header('location:users.php');
    } else {
        echo 'invalid';
        // header("location:user-edit.php?id=$id");
    }
}
