<?php


class Animal
{
  protected function info(){
      echo "Animal info";
  }
}

class Dog extends Animal
{
    public function getAnimalInfo()
    {
        $this->info();
    }
}


$dog=new Dog();
$dog->getAnimalInfo();

