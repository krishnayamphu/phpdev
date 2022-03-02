<?php

namespace mypdo;
use PDO;
use RecursiveArrayIterator;

require 'ConnectDB.php';
require 'User.php';
class UserPdo
{
    public static function getAllUsers(){
        $con=ConnectDB::connect();
        // prepare sql and bind parameters
        $sql="SELECT * FROM users";
        $stmt = $con->prepare($sql);
        $stmt->execute();


        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$u){
            $user =new User();
            $user->setId($u['id']);
            $user->setUsername($u['username']);
            $user->setPassword($u['password']);
            $user->setCreatedDate($u['created_date']);
            $users[]= clone $user; //note: $users[] local

        }
//        print_r($users);
        return $users;
    }

    public static function saveUser(User $user){
        $username = $user->getUsername();
        $password = $user->getPassword();

        $con=ConnectDB::connect();
        // prepare sql and bind parameters
        $sql="INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $lastid=$con->lastInsertId();

        echo "last id:$lastid";
        $con=null;
    }





}

//UserPdo::getAllUsers();

