<?php
$email = "abc@gmail.com";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    echo $email;
}
echo "<br>";
$name = "ram";
if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    echo "Only letters and white space allowed";
} else {
    echo $name;
}
