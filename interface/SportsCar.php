<?php

require_once "Car.php";
require_once "CarModel.php";

class SportsCar implements Car, CarModel
{

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

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

$sportscar1->setModel("BMW");
echo "This car is a " . $sportscar1->getModel() . "<br>";
$sportscar1->start();
$sportscar1->accelerate();
$sportscar1->break();
