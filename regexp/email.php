<?php

$email = "df@dsfa.com";

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}else{
	echo "valid email";
}