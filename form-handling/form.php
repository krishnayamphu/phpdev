<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<?php
	$NAME=

	?>

	<form action="$_SERVER['PHP_SELF']" method="get">
		<label>Name:</label>
		<input type="text" name="name">
		<br><br>
		<label>Age:</label>
		<input type="text" name="age">
		<br><br>
		<button>Submit</button>
	</form>

</body>
</html>