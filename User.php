<?php

class User
{
    static public $name = "Paul";

    static function hello()
    {
        echo "Hello world";
    }
}

echo User::$name . "<br>";

User::hello();
