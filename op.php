<?php

/*
operators:
arithmetic op : +,-,*,/,++,--,%
assignment op : =,+=,-=,*=,/=,%=
relational op : >,<,>=,<=,==,===,!=
logical op    : &&,||,!

*/

$a=5;

  //++$a pre increment

// $a++; post increment
++$a;

echo $a;
$x=20;
$y=5;

echo "<br>";
echo  $x%$y;

$z=10;
$z+=$y; //$z=$z+$y;

echo "<br>".$z;

echo "<br>";

if(5>40){
	echo "true";
}else{
	echo "false";
}

echo "<br>";
$username="user";
$password="admin123";

if($username=="admin" && $password=="admin123"){
	echo "Login success";
}else{
	echo "Invalid login";
}

