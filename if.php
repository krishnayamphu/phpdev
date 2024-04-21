<?php
$a = 50;
$b = 10;

if ($a > $b) {
    echo "a is greater";
} else {
    echo "b is greater";
}


echo "<br>";

$marks = 50;
if ($marks >= 35) {
    echo "pass";
} else {
    echo "fail";
}

echo "<br>";

$username = "admin123";
$password = "a123";
if ($username == "admin" && $password == "a123") {
    echo "login success";
} else {
    echo "invalid username or password";
}
