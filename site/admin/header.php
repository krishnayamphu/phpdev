<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Home</title>
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>
</head>
<body>
<header class="site-header bg-success py-5">
    <div class="container">
        <h1 class="text-center">Aptech Compter Education</h1>
        <p class="text-center mb-0">Your slogan here</p>
    </div>
</header>
<nav class="d-flex justify-content-center primary-nav bg-secondary">
    <a href="dashboard.php">Dashboard</a>
    <a href="post-new.php">New Post</a>
    <?php if(!isset($_SESSION['user'])){?>
        <a href="login.php">Login</a>
    <?php }else { ?>
        <a href="logout.php">Logout</a>
    <?php } ?>
</nav>
