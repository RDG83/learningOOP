<?php

declare(strict_types=1);

class Car
{
    private string $name; //must be a string
    private int $model; //must be an integer

    function setDetails(array $details) // only accepts arrays as input
    {
        $this->name = $details["name"];
        $this->model = $details["model"];
    }
}

$car1 = new Car;
$cardetails = ["name" => "Tesla", "model" => 3];
$car1->setDetails($cardetails);
var_dump($car1);
