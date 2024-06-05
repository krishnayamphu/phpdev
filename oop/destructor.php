<?php
class Car
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function __destruct()
    {
        echo "Car name is {$this->name}.";
    }
}

$obj = new Car("Toyota");
