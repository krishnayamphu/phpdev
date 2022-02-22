<?php
class Math{
    private $x;
    public $n;
    public function setNumber($n){
        $this->n=$n;
    }

    public function setX($x){
        $this->x=$x;
    }

    public function getX(){
        return $this->x;
    }
}

$ob=new Math();
$ob->setNumber(5);

echo $ob->n;

$ob->setX(100);
echo "<br>NUmber:".$ob->getX();
