<?php
// write mode: w=create,r=read, a=append
$file = fopen("data.txt", "w") or die("Unable to create file.");
fwrite($file, "hello php");
echo "file created successfully";
