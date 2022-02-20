<?php
$title="";
require('header.php');
?>
<main>
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-12">
                <?php
                require '../sql/connectdb.php';
                $id=$_GET['id'];
                $sql = "SELECT * FROM posts WHERE id=$id ORDER BY id	DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h1 class="card-title"><?php echo $row['title']; ?></h1>
                            <?php
                            if ($row['photo_path'] !== '') {?>
                                <img src="uploads/<?php echo $row['photo_path']; ?>" class="card-img-top img-thumb-md"
                                     alt="<?php echo $row['photo_path']; ?>">
                            <?php } ?>
                            <p class="card-text"><?php echo $row['text']; ?></p>
                            <p class="card-text">
                                <small class="text-muted"><?php echo $row['created_date']; ?></small>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</main>

<?php require('footer.php'); ?>
