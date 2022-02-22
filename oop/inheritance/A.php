<?php
class A{
    public $x;
}


class B extends A{
    public $y;

    public function sum(){
        echo "Total sum:".($this->x+$this->y);
    }
}

$obj=new B();

$obj->x=10;
$obj->y=5;
$obj->sum();



