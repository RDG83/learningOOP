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
}


$student1 = new Student("Jaap", "de Vries");

var_dump($student1);
