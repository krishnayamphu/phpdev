<?php

$file = $_POST['photo'];
unlink($file);

header('location:photo.php');
