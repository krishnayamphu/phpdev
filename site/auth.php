<?php
session_start();

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	if($username=="admin" && $password=="admin123"){
		$_SESSION['user']=$username;
		header("location:dashboard.php");
	}else{
		$_SESSION['error']="Invalid username or password.";
		header("location:login.php");
	}
}