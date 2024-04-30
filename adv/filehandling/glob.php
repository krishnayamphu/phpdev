<?php
$files = glob("docs/*.*");
foreach ($files as $file) {
    echo $file . "<br>";
}
// var_dump($files);
