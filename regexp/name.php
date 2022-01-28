<?php

$name = "abc";
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  echo "Only letters and white space allowed";
}else{
	echo $name;
}