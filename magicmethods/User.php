<?php

class User
{
    function __construct()
    {
        echo "Hello, this is de constructor <br>";
    }

    function __call($name, $arguments)
    {
        echo "This is the call method. <br>";
    }

    function __set($name, $value)
    {
        echo "This is the set magic method. <br>";
    }
    function __get($name)
    {
        echo "This is the get magic method. <br>";
    }

    function __debugInfo()
    {
        echo "This is the debug magic method. <br>";
    }

    function __toString()
    {
        return "This is the tostring magic method. <br>";
    }

    function __destruct()
    {
        echo "This is the destructor method. <br>";
    }
}

$user1 = new User;

echo $user1;

$user1->happy();

$user1->name = "tony";

echo $user1->age;

var_dump($user1);
