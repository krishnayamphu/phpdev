<?php

/* initialization array values

$var=array(
		array(value1,value2,...),
		array(value1,value2,...),
		....
	);

$var[rowIndex][colIndex];
*/ 
$cars = array(
		array('Volvo',22 ),
		array('BMW',15 )
		);

echo $cars[0][0];
echo " ".$cars[0][1];
echo "<br>".$cars[1][0];
echo " ".$cars[1][1];

echo "<hr>";

for($i=0; $i<2; $i++){
	for($j=0; $j<2; $j++){
		echo " ".$cars[$i][$j];
	}
	echo "<br>";
}

