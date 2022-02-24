<?php

interface Car{
    public function intro($name);
}

class Honda implements Car
{

    public function intro($name)
    {
        echo "Hello I'm a $name";
    }
}


$
