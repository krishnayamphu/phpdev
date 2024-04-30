<?php
// write mode: w=create,r=read, a=append
$file = fopen("data.txt", "a") or die("Unable to create file.");
fwrite($file, "welcome");
fclose($file);
echo "data append successfully";
