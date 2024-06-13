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