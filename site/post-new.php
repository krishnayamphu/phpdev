<?php 
session_start();
require '../sql/connectdb.php';
if(!isset($_SESSION['user'])){ 
	header("location:login.php");
}

if(isset($_POST['submit'])){
  $title=$_POST['title'];
  $text=$_POST['text'];
  
  $sql="INSERT INTO posts (title,text) VALUES('$title','$text')";

  if ($conn->query($sql) === TRUE) {
    header('location:dashboard.php');
    // echo "Data created successfully";
  } else {
    echo "Error inserting data: " . $conn->error;
  }
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
<?php require('admin/header.php'); ?>
<main>
	<div class="container">
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Title:
    <input type="text" name="title" required><br><br>
    Post Content:
    <textarea name="text" cols="30" rows="10"></textarea>
    <br><br>
    <button type="submit" name="submit">Create Post</button>
</form>
	</div>
</main>

<?php require('footer.php'); ?>
