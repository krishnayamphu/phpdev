<?php

/* 

$GLOBALS['VAR']; 

*/

$n=100;

function test()
{
	$GLOBALS['x']=$GLOBALS['n'];
	echo "Value: ".$GLOBALS['x'];
}

test();

echo "<br>value of x: ".$x;