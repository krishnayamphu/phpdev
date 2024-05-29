<?php
session_start();
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpdev";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $hash = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE username='$_POST[username]' AND password='" . $hash . "'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION["user"] = $_POST['username'];
        header('location:users.php');
    } else {
        $_SESSION["err"] = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-4 shadow">
                    <form action="" method="post" class="p-3">
                        <h3 class="text-center">User Login</h3>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <?php if (isset($_SESSION['err'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php
                                echo $_SESSION['err'];
                                unset($_SESSION['err']);
                                ?>
                            </div>
                        <?php endif ?>
                        <button name="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>