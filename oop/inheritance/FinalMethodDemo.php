<?php

class B{
    public final function msg(){
        echo "Hello World";
    }
}
class FinalMethodDemo extends B
{
    public function msg(){ //final method can't override

    }
}
