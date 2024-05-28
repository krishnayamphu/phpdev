<?php

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpdev";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $hash = md5($pass);
    $sql = "INSERT INTO users (username,password) VALUES('$user','$hash')";
    $result = mysqli_query($conn, $sql);

    var_dump($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include 'header.php' ?>
    <main>
        <div class="container py-5">
            <h3>Create New User</h3>
            <div class="row">
                <div class="col-6">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button class="btn btn-primary" type="submit" name="submit">Create</button>
                    </form>
                </div>
            </div>

        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>