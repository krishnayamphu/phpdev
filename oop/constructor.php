<?php
class Car
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

$obj = new Car("Toyota");

echo $obj->getName();
