<?php

namespace mypdo;
require 'UserPdo.php';
class UserApp
{
 function crateUser(){
     $user=new User();
     $user->setUsername("useradf");
     $user->setPassword(md5('u12adf3'));
     UserPdo::saveUser($user);
 }

 function showAllUsers(){
     $allusers=(array)UserPdo::getAllUsers();
     foreach ($allusers as $user){
         echo $user->getId()." ".$user->getUsername()."<br>";
     }
 }
}

$userApp=new UserApp();
$userApp->showAllUsers();
