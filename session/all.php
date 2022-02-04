<?php

session_start();
print_r($_SESSION);

$session=$_SESSION;
foreach($session as $key=>$v ){
    echo "<br>".$key."=>".$v;
}