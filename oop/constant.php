<?php
class Message
{
    const MSG = "showing some message";
    public $test = "<br>testing";


    function showMessage()
    {
        echo self::MSG;
        // echo $this->test;
    }
}

// echo Message::MSG;

$msg = new Message();
// echo $msg->test;

$msg->showMessage();
