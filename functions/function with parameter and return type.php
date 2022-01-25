<?php

function sum($x,$y)
{
	return $x+$y;
}

$total=sum(4,5);

echo $total;

echo "<br>".sum(40,5);
echo "<br>";
function getInfo($name, $age){
	echo "Name: ".$name;
	echo "<br>Age: ".$age;
}



getInfo("Ramesh",40);
