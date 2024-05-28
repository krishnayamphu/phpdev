<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include 'header.php' ?>
    <main>
        <div class="container py-5">
            <div class="d-flex justify-content-between">
                <h3>Search Users</h3>
                <form action="<?php $_SERVER['PHP_SELF'] ?>">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="search users" name="username">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Created At</th>
                </tr>
                <?php
                if (isset($_GET['username'])) :

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "phpdev";
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM users WHERE username LIKE '$_GET[username]%'";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);

                    while ($row = mysqli_fetch_assoc($result)) :
                ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>
            </table>
        </div>
    </main>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>