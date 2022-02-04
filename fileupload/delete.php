<?php

if(isset($_POST["submit"])) {
	$filename=$_POST['filename']; //pic.jpg
	unlink("uploads/".$filename);
	echo "file deleted.";
}else{
	echo "Error while deleting file.";
}

