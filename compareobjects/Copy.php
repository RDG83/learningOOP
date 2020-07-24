<?php

class User
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function makeCopy($obj)
    {
        return new User($obj->name);
    }
}

$user1 = new User("Paul");

$user2 = $user1->makeCopy($user1);

var_dump($user2);

if ($user1 === $user2) {
    echo "same";
} else {
    echo "different";
}

echo "<br>";

if ($user1 == $user2) {
    echo "same";
} else {
    echo "different";
}
