 <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<p>
	&copy;copyright, 2010-<?php echo date("Y");?>
</p>

<hr>

Time<br>
 <?php echo "The time is " . date("h:i:s a"); ?> 
<br>	
<?php
date_default_timezone_set("Asia/Kathmandu");
echo "The time is " . date("h:i:sa");
?> 

<br>
<?php
echo "Date Time: ".date("Y-m-d h:i:s a");

?>

