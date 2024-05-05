<?php
// $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
// echo json_encode($age);


$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
$data = json_decode($jsonobj, true);
echo "<br>Age:" . $data['Peter'];

$person = json_decode($jsonobj);
echo "<br>Person Age:" . $person->Peter;
