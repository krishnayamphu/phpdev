<?php

$fruit = ["Banana", "Orange", "Apple", "Kiwi", "Cherry"];

rsort($fruit);

foreach ($fruit as $v) {
    echo $v . ", ";
}

$person = ["Firstname" => "John", "Lastname" => "Doe", "Address" => "Patan"];
arsort($person);
echo "<hr>";
foreach ($person as $key => $value) {
    echo $key . " = " . $value . "<br>";
}
