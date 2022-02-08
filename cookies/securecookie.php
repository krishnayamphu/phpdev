<?php

$msg="hi";

setcookie("msg",md5($msg));
echo "cookie set successfully";