<?php

abstract class Car
{
    abstract function start();

    function break()
    {
        echo "The car slows down.";
    }
}

class Sportscar extends Car
{
    function start()
    {
        echo "The engine has started.";
    }
}

$sportscar1 = new Sportscar;

$sportscar1->start();
$sportscar1->break();
