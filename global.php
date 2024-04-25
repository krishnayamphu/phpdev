<?php
$x = 10;

function test()
{
    echo "hi<br>";
    echo $GLOBALS['x'];
}

test();

$name = "Ram";

function demo()
{
    global $name;
    echo "<br>" . $name;
}

demo();
