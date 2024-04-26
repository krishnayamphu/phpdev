<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Welcome to Homepage</h1>

    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>

</html>