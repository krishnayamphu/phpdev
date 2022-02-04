<header>
	<h1>Aptech Compter Education</h1>
	<p>Your slogan here</p>
</header>
<nav>
	<a href="index.php">Home</a>
	<a href="about.php">About</a>
	<?php if(!isset($_SESSION['user'])){?>
	<a href="login.php">Login</a>
	<?php }else { ?>
	<a href="logout.php">Logout</a>
	<?php } ?>
</nav>