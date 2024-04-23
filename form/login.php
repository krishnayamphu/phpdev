<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form action="auth.php" method="post">
        <?php
        if (isset($_GET['err'])) {
            echo "<p class='error'>Invalid username or password</p>";
        }

        ?>
        <input type="text" name="username" placeholder="Username">
        <br>
        <br>
        <input type="password" name="password" placeholder="password">
        <br><br>
        <button>Submit</button>
    </form>
</body>

</html>