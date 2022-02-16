<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>User Login</title>
</head>
<body>
<?php require('header.php'); ?>
<main>
	<div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-4">
                <h1 class="login-header">User Login</h1>
                <div class="error">
                    <p><?php
                        if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                        ?></p>
                </div>
                <form class="user-form" action="auth.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="d-grid  d-block">
                        <button class="btn btn-success" type="submit" name="submit" >Login</button>
                    </div>


                </form>
            </div>
        </div>
	</div>
</main>

<?php require('footer.php'); ?>
