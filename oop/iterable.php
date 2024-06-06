<?php

function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item . "<br>";
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);


function showList(iterable $itr)
{
    foreach ($itr as $item) {
        echo $item . ",";
    }
}


$fruits = array("Apple", "Orange", "Mango");
showList($fruits);

echo "<br>";
$colors = array("Red", "Orange", "Green");
showList($colors);
