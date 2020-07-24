<?php

declare(strict_types=1); //must be enabled or else there will be no errors given when using wrong types


class Automobile
{
    private int $id = 101; //typehinting, this can only be an integer

    function getId(): int //typehinting, the return value can only be an integer
    {
        return $this->id;
    }
}

class Car extends Automobile
{

    private $owner = "Elon Musk";

    private string $name; //must be a string
    private int $model; //must be an integer

    function setDetails(array $details, Automobile $auto): void // only accepts arrays as input // void means it has no return value
    {
        $this->name = $details["name"];
        $this->model = $details["model"];
        $this->id = $auto->getId();
    }

    function getName(): string // must return a string
    {
        return $this->owner;
    }
}


$auto1 = new Automobile;

$car1 = new Car;
$cardetails = ["name" => "Tesla", "model" => 3];
$car1->setDetails($cardetails, $auto1);
var_dump($car1);
echo $car1->getName();
