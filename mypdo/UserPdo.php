<?php

namespace mypdo;
require 'ConnectDB.php';
require 'User.php';

use PDOStatement;

class UserPdo
{
    public static function saveUser($username,$password){
        $con=ConnectDB::connect();
        // prepare sql and bind parameters
        $sql="INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
//        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();


    }

}


$user=new User();
$user->setUsername("abc");
$user->setPassword(md5('abc123'));

$username="adminhfdghd";
$password="admin12dfghfdgh3";

UserPdo::saveUser($username,$password);

