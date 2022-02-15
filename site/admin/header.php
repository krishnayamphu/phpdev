<?php require '../sql/connectdb.php'; ?>
<header>
	<h1>Aptech Compter Education</h1>
	<p>Your slogan here</p>
</header>
<nav>
	<a href="dashboard.php">Dashboard</a>
	<a href="post-new.php">New Post</a>
	<?php if(!isset($_SESSION['user'])){?>
	<a href="login.php">Login</a>
	<?php }else { ?>
	<a href="logout.php">Logout</a>
	<?php } ?>
</nav>