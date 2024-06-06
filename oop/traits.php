<?php
trait Playable
{
    function playSound()
    {
        echo "playing sound";
    }
}

trait Drawable
{
    function draw()
    {
        echo "drawing something";
    }
}


class DrawingApp
{
    use Playable;
    use Drawable;
}

$app = new DrawingApp();
$app->playSound();
echo "<br>";
$app->draw();
