<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:../login.php");
}
require '../connectdb.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM posts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['del-success'] = "Post deleted successfully.";
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

$title="Dashboard";
require('header.php');
?>

<main>
    <div class="container py-5">
        <h4 class="text-center">Welcome to Dashboard</h4>
        <h5>All Posts</h5>

        <?php
        if(isset($_SESSION['del-success'])){
            echo"<div class='alert alert-danger'role='alert'>". $_SESSION['del-success']."</div>";
            unset($_SESSION['del-success']);
        }
        if(isset($_SESSION['error'])){
            echo"<div class='alert alert-danger'role='alert'>". $_SESSION['error']."</div>";
            unset($_SESSION['error']);
        }
        ?>

        <table class="table table-striped table-hover my-3">
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
                        <div class="d-flex gap-2">

                            <a class="btn btn-primary" href="post-edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#postModal<?php echo $row['id']; ?>">
                               Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="postModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Deleting Item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <p>Are you sure delete this item? <?php echo $row['id']; ?> </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="submit">Confirmed</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
</main>

<?php require('footer.php'); ?>
