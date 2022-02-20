<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("location:../login.php");
}

require '../connectdb.php';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$hash_password=md5($password);
	$user_count=0;


    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash_password'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $user_count++;
    }

	if($user_count==1){
		$_SESSION['user']=$username;
		header("location:dashboard.php");
	}else{
		$_SESSION['error']="Invalid username or password.";
		header("location:../login.php");
	}
}
