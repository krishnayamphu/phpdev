<?php
if ($_POST['username'] == '') {
    echo "username required";
} else if ($_POST['password'] == '') {
    echo "password required";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" && $password == "a123") {
        header('location:welcome.php');
    } else {
        //echo "invalid username or password";
        header('location:login.php?err');
    }
}
