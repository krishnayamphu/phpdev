<?php

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";

echo "Year:  " . date("Y") . "<br>";

date_default_timezone_set("Asia/Kathmandu");
echo "The time is " . date("h:i:sa");
