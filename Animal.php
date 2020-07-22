<?php

class Animal
{
    public string $name;
    public bool $isHunting;

    function __construct($name, $isHunting)
    {
        $this->name = $name;
        $this->isHunting = $isHunting;
    }

    function doesHunting()
    {
        if ($this->isHunting) {
            echo "$this->name does hunting. <br>";
        } else {
            echo "$this->name does not hunt. <br>";
        }
    }
}

class Cow extends Animal
{
    function makeSound()
    {
        echo "The cow says MOO! <br>";
    }
}

class Tiger extends Animal
{
    function makeSound()
    {
        echo "The tiger says GROWL <br>";
    }
}

$cow1 = new Cow("Bessy", false);

$tiger1 = new Tiger("Shere Khan", true);

$cow1->doesHunting();
$tiger1->doesHunting();

$cow1->makeSound();
$tiger1->makeSound();
