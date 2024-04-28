<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "a123") {
        $_SESSION['user'] = $username;
        header('location:welcome.php');
    } else {
        $_SESSION['err'] = "Invalid username or password";
        header('location:index.php');
    }
}
