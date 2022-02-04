<?php
// Start the session
session_start();

//get session variable
$user=$_SESSION['user'];

echo "Username: ".$user;

echo "<br>Result: ".$_SESSION['test'];

