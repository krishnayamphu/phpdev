<?php

$username=$_POST['Username'];
$passwrod=$_POST['Password'];

if($username==""){
	echo "Username field can not be blank";
}else if($passwrod==""){
	echo "Password field can not be blank";
}else if($username=="admin" && $passwrod=="admin123"){
	header("location:dashboard.php"); //redirect page
}else{
	header("location:login-form.php");
}


