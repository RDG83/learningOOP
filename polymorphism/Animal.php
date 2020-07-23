<?php

interface Animal
{
    public function makeSound();
}

class Cow implements Animal
{
    function makeSound()
    {
        echo "Mooo Mooo" . "<br>";
    }
}

class Tiger implements Animal
{
    function makeSound()
    {
        echo "Grrr Grrr" . "<br>";
    }
}

$cow1 = new Cow;
$tiger1 = new Tiger;

$cow1->makeSound();
$tiger1->makeSound();
