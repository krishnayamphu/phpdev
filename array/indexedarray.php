<?php

/* initialization array values*/ 

$num = array(10,20,30,40,50);
echo $num[0];
echo "<hr>";

for($i=0; $i<5; $i++){
	echo $num[$i]." ";
}

/* assign manually */
//$age[2];
$age[0]=50;
$age[1]=60;

echo "Age: ".$age[1];
echo "<br>Array Length: ".count($age);
