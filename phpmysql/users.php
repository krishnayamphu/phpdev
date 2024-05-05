<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "phpdev";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        while ($row = mysqli_fetch_assoc($result)) :
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td> <?php echo $row['created_at'] ?></td>
                <td>
                    <a href="user-edit.php?id=<?php echo $row['id'] ?>">Edit</a>

                    <form action="user-delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <button type="submit" name="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php
        endwhile
        ?>
    </table>
</body>

</html>