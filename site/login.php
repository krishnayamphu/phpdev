<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>User Login</title>
</head>
<body>
<?php require('header.php'); ?>
<main>
	<div class="container">
		<h1 class="login-header">User Login</h1>
		<div class="error">
			<p><?php 
			if(isset($_SESSION['error'])){ 
				echo $_SESSION['error'];
				unset($_SESSION['error']);
			}
			?></p>
		</div>
		<form class="user-form" action="auth.php" method="post">
			<label>Username</label>
			<input type="text" name="username" required>
			<label>Password</label>
			<input type="password" name="password" required>

			<button type="submit" name="submit">Login</button>
		</form>
	</div>
</main>

<?php require('footer.php'); ?>
