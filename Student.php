<?php

class Student
{
    public $firstName;
    public $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function hello()
    {
        echo "Hello, my name is $this->firstName $this->lastName.";
    }
}


$student1 = new Student("Jaap", "de Vries");

var_dump($student1);

$student1->hello();
