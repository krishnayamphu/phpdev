<?php
// write mode: w=create,r=read, a=append
$file = fopen("data.txt", "r") or die("Unable to found file.");
$data = fread($file, filesize("data.txt"));
fclose($file);
echo $data;
//var_dump($data);
