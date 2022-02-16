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

?>
<?php require('admin/header.php'); ?>
<main>
    <div class="container py-5">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-10">
                    <textarea id="editor" class="form-control" name="text"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-end" name="update">Create Post</button>
        </form>
    </div>
</main>

<?php require('admin/footer.php'); ?>
