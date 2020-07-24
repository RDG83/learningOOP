<?php

declare(strict_types=1);

class Car
{

    private $owner = "Elon Musk";

    private string $name; //must be a string
    private int $model; //must be an integer

    function setDetails(array $details): void // only accepts arrays as input // void means it has no return value
    {
        $this->name = $details["name"];
        $this->model = $details["model"];
    }

    function getName(): string // must return a string
    {
        return $this->owner;
    }
}

$car1 = new Car;
$cardetails = ["name" => "Tesla", "model" => 3];
$car1->setDetails($cardetails);
var_dump($car1);
echo $car1->getName();
