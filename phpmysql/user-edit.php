<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdev";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include 'header.php' ?>
    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <h3>User Details</h3>
                    <form action="user-update.php" method="post">
                        <?php
                        $sql = "SELECT * FROM users WHERE id=$id";
                        $result = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_assoc($result)) :
                        ?>

                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>" required>
                            </div>
                        <?php
                        endwhile
                        ?>
                        <button class="btn btn-primary" type="submit" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>