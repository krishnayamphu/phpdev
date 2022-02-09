<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
<nav>
    <a href="datatable.php">All Users</a>
</nav>
<form action="add-user.php" method="post">
    Username:
    <input type="text" name="username" required><br><br>
    Password:
    <input type="password" name="password" required><br><br>
    <button type="submit" name="submit">Register</button>
</form>
    
</body>
</html>