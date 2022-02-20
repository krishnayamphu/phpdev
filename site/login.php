<?php session_start();
if (isset($_SESSION['user'])) {
    header("location:admin/dashboard.php");
}
$title="User Login";
require 'header.php';
?>
<main>
	<div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-4">
                <h1 class="login-header">User Login</h1>
                    <?php
                    if(isset($_SESSION['error'])){
                        echo"<div class='alert alert-danger'role='alert'>". $_SESSION['error']."</div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                <form class="user-form" action="admin/auth.php" method="post">
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
                <div class="d-flex justify-content-center py-3">
                    <a class=" link-info text-center" href="register.php">Register new account</a>
                </div>

            </div>
        </div>
	</div>
</main>
<?php require('footer.php'); ?>
