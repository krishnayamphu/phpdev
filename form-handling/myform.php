<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
		<label>Gender</label>
		<input type="radio" name="g" value="male">male
		<input type="radio" name="g" value="female">female
		<br>
		<label>Course</label>
		<input type="checkbox" name="course[]" value="basic">Basic
		<input type="checkbox" name="course[]" value="web dev">Web Dev
		<br>
		<button>send</button>
	</form>

</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$gender=$_POST['g'];
$course=$_REQUEST['course'];

echo "Gender:".$gender;
foreach ($course as $c) {
	echo "<br>Course:".$c.", ";	
}

}


