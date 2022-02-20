<?php
session_start();
require '../connectdb.php';
if (!isset($_SESSION['user'])) {
    header("location:../login.php");
}

$title="New Post";
require('header.php');
?>
<main>
    <div class="container py-5">
        <form action="postCreate.php" method="post" enctype="multipart/form-data">
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
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Post Thumbnail</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="fileToUpload">
                </div>
            </div>
            <button type="submit" class="btn btn-success float-end" name="submit">Create Post</button>
        </form>
    </div>
</main>

<?php require('footer.php'); ?>
