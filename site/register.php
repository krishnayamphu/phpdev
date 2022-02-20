<?php session_start();
require 'connectdb.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    if($password!=$confirm_password){
        $_SESSION['cpassword']='Confirm password do not match';
    }else{
        $hash_password=md5($password);
        $sql = "INSERT INTO users (username,password) VALUES('$username','$hash_password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success']="User registered successfully. <a href='login.php'>Goto login</a>";
        }else{
            $_SESSION['error']=$conn->error;
        }
    }
}
$title="User Registration";
require 'header.php';
?>

<main>
	<div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-4">
                <h1 class="login-header">User Registration</h1>
                    <?php
                    if(isset($_SESSION['cpassword'])){
                        echo"<div class='alert alert-danger'role='alert'>". $_SESSION['cpassword']."</div>";
                        unset($_SESSION['cpassword']);
                    }
                    if(isset($_SESSION['success'])){
                        echo"<div class='alert alert-success'role='alert'>". $_SESSION['success']."</div>";
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['error'])){
                        echo"<div class='alert alert-danger'role='alert'>". $_SESSION['error']."</div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                <form class="user-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <div class="d-grid  d-block">
                        <button class="btn btn-success" type="submit" name="submit" >Register</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center py-3">
                    <a class=" link-info text-center" href="login.php">Already has an account?</a>
                </div>

            </div>
        </div>
	</div>
</main>

<?php require('footer.php'); ?>
