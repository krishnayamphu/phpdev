<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpdev";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['username'] . " " . $row['password'] . "<br>";
    }
} else {
    echo "no data";
}

?>

<?php
if (5 > 2) :
?>

    highlight_file
<?php
else :
?>
    dfasfas
<?php
endif
?>