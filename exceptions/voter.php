<?php
class Person{
    public $age;

    public function __construct()
    {

    }


    public function checkAge($age){
        $this->age=$age;
        if($this->age<18){
            throw new Exception("You're under age");
        }else{
            echo "you can vote";
        }

    }
}

$person =new Person();

try {
    $person->checkAge(15);
}catch (Exception $e){
    echo "Voter age: $e";
}
