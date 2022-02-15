<?php
session_start();
require '../sql/connectdb.php';
if (!isset($_SESSION['user'])) {
  header("location:login.php");
}

if(isset($_POST['submit'])){
 $id= $_POST['id'];
 $sql = "DELETE FROM posts WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['del-success'] = "Post deleted successfully.";
    header('location:dashboard.php');
    // echo "Data created successfully";
  } else {
    echo "Error in while deleting data: " . $conn->error;
  }

}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Home</title>
</head>

<body>
  <?php require('admin/header.php'); ?>
  <main>
    <div class="container">
      <h1>Welcome to Dashboard</h1>
      <p>Logged in User: <?php echo $_SESSION['user']; ?></p>

      <table border="1">
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Image</th>
          <th>Created Date</th>
          <th>Action</th>
        </tr>

        <?php
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["photo_path"]; ?></td>
            <td><?php echo $row["created_date"]; ?></td>
            <td>
              <a href="post-edit.php?id=<?php echo $row['id']; ?>">Edit</a>

              <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="submit">Delete</button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </table>

    </div>
  </main>

</body>

</html>