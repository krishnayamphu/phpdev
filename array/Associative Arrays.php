<?php

/* Associative Arrays

$var=array('key'=>value,'key'=>value,...);

$var[key];
*/ 

$age=array('ram'=>20,'hari'=>15,'gita'=>17);

echo $age['ram'];

/*

foreach($arrayVar as $var => $var_value) {
  //statements
}

*/
echo "<br>";
foreach ($age as $key => $value) {
	echo $key. " => ".$value."<br>";
}

