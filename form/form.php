<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo $name;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="name" placeholder="your name">
        <button>Submit</button>
    </form>
</body>

</html>