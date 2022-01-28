<?php
$colors=array("red","green","yellow","blue");
sort($colors);


// blue,green,red,yellow
for($i=0;$i<count($colors);$i++){
	echo $colors[$i]." ";
}

echo "<br>";
$num=array(10,50,12,74,25);

rsort($num);
for($i=0;$i<count($colors);$i++){
	echo $num[$i]." ";
}

