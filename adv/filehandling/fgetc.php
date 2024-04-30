<?php
// write mode: w=create,r=read, a=append
$file = fopen("data.txt", "r") or die("Unable to found file.");
while (!feof($file)) {
    echo fgetc($file);
}
fclose($file);
