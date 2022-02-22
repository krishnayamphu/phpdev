<?php


class Bank
{
    public function info(){
        echo "Bank name: bank";
    }
}

class SanimaBank extends Bank{
    public function info(){ //method overriding
        echo "Bank name: Sanima Bank";
    }
}

$bank=new SanimaBank();
$bank->info();
