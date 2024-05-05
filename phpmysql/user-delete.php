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


    $sql = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    echo $result;
    if ($result == 1) {
        header('location:users.php');
    } else {
        echo 'invalid';
    }
}
