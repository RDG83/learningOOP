<?php

class Chef
{

    public $name;
    private $age;
    protected $specialty;

    function __construct($name, $age, $specialty)
    {
        $this->name = $name;
        $this->age = $age;
        $this->specialty = $specialty;
    }

    public function makeSoup()
    {
        echo $this->name . " makes a soup <br>";
    }

    private function makeStew()
    {
        echo $this->name . " makes a stew <br>";
    }
}

class Italianchef extends Chef
{
    function makePasta()
    {
        echo $this->name . " makes an awesome pasta <br>";
    }
}

$italianChef1 = new Italianchef("Giovanni", 40, "pasta");

$italianChef1->makeSoup();

// $italianChef1->makeStew(); // is a private function and cannot be inherited

$italianChef1->makePasta();

$normalChef1 = new Chef("John", 36, "stew");

$normalChef1->makeSoup();

// $normalChef1->makeStew(); // private and cannot be executed outside class

// $normalChef1->makePasta(); // this is only a Chef and not an italianChef and doenst know the makePasta
