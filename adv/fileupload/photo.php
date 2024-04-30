<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <style>
        .media-gallery {
            display: flex;
            width: 80%;
            padding: 15px;
            margin: 15px auto;
            border: 1px solid red;
        }

        .media {
            width: 150px;
            margin: 15px;
        }

        .media img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div class="media-gallery">
        <?php
        $files = glob("uploads/*.*");
        foreach ($files as $file) :
        ?>
            <div class="media">
                <img src="<?php echo $file; ?>">
                <form action="del.php" method="post">
                    <input type="hidden" name="photo" value="<?php echo $file ?>">
                    <button>Delete</button>
                </form>
            </div>
        <?php
        endforeach
        ?>
    </div>

</body>

</html>