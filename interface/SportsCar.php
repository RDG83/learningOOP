<?php

require_once "Car.php";

class SportsCar implements Car
{
    public function start()
    {
        echo "Starting the car. <br>";
    }

    public function accelerate()
    {
        echo "The car is accelarating. <br>";
    }
    public function break()
    {
        echo "The car is stopping. <br>";
    }
}

$sportscar1 = new SportsCar;

$sportscar1->start();
$sportscar1->accelerate();
$sportscar1->break();
