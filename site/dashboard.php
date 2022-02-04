<?php 
session_start();
if(!isset($_SESSION['user'])){ 
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Home</title>
</head>
<body>
<?php require('header.php'); ?>
<main>
	<div class="container">
		<h1>Welcome to Dashboard</h1>
		<p>Logged in User: <?php echo $_SESSION['user']; ?></p>
		<img src="images/admin.png" alt="" style="width:100%">
	</div>
</main>

<?php require('footer.php'); ?>
