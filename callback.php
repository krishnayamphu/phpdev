<?php

function video($filename){
    echo "$filename video is Playing.";
}

function music ($filename){
    echo "$filename music is playing.";
}

function myPlayer($filename, $type){
    $type($filename);
}

myPlayer("mymovie","video");
echo "<br>";
myPlayer("nepali song ","music");
