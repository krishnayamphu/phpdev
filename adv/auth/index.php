<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .alert-error {
            color: red;
        }
    </style>
</head>

<body>
    <form action="check.php" method="post">
        <?php
        if (isset($_SESSION['err'])) {
            echo "<p class='alert-error'>" . $_SESSION['err'] . "</p>";
        }
        unset($_SESSION['err']);
        ?>
        <input type="text" name="username" placeholder="username">
        <br><br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>