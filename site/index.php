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
	<?php
require '../sql/connectdb.php';

$sql = "SELECT * FROM posts ORDER BY id	DESC LIMIT 5";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)) {
?>
		<h1><?php echo $row['title']; ?></h1>
		<?php echo $row['created_date']; ?>

		<p><?php echo $row['text']; ?></p>
	
		<?php } ?>
	</div>
</main>

<?php require('footer.php'); ?>
