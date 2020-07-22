<?php

class Student
{
    public $firstName;
    public $lastName;
    public $age;

    function __construct(array $params = array())
    {
        $this->firstName = $params["firstname"];
        $this->lastName = $params["lastname"];
        $this->age = $params["age"];
    }

    function hello()
    {
        echo "Hello, my name is $this->firstName $this->lastName.";
    }
}

$params = ["firstname" => "Paul", "lastname" => "de Wit", "age" => 26];
$student1 = new Student($params);

var_dump($student1);

$student1->hello();
