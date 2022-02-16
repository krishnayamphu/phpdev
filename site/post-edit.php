<?php
session_start();
require '../sql/connectdb.php';
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];

    $sql = "INSERT INTO posts (title,text) VALUES('$title','$text')";

    if ($conn->query($sql) === TRUE) {
        header('location:dashboard.php');
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $post_id = $_POST['pid'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    $sql = "UPDATE posts SET title='$title', text='$text' WHERE id=$post_id";

    if ($conn->query($sql) === TRUE) {
        header('location:dashboard.php');
    } else {
        echo "Error updating data: " . $conn->error;
    }
}
require('admin/header.php');
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>

<main>
    <div class="container py-5">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="8" name="text"><?php echo $row['text']; ?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update Post</button>
        </form>
        <?php } ?>
    </div>
</main>

<?php require('footer.php'); ?>
