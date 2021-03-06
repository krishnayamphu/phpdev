<?php
$title="Home";
require('header.php');
?>
<main>
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-8">
                <?php
                require '../sql/connectdb.php';

                $sql = "SELECT * FROM posts ORDER BY id	DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <div class="card mb-3">
                        <?php
                        if ($row['photo_path'] !== '') {

                            ?>
                            <img src="uploads/<?php echo $row['photo_path']; ?>" class="card-img-top img-thumb-md"
                                 alt="<?php echo $row['photo_path']; ?>">

                        <?php } ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h5>
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
