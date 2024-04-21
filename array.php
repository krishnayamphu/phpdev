<?php

$stdlist = array("Ram", "Hari", "Hom", "Sita");
foreach ($stdlist as $s) {
    echo $s . "<br>";
}



$fruit = array(
    "name" => "Apple",
    "color" => "light pink",
    "taste" => "sweet"
);

// echo $fruit['name'];

foreach ($fruit as $key => $value) {
    echo $key . "=" . $value . "<br>";
}
