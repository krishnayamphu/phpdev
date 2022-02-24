<?php
trait Message{
    public function hello(){
        echo "Hello World";
    }
}
trait Sound{
    public function playSound(){
        echo "Playing some sound";
    }
}

class TraitDemo
{
    use Message;
    use Sound;
}

$td=new TraitDemo();
$td->hello();
echo "<br>";
$td->playSound();

