<?php
interface Writable
{
    //abstract method
    function write();
}

class MyWriter implements Writable
{
    function write()
    {
        echo "writing something";
    }
}

$w = new MyWriter();
$w->write();
