<?php

class Helper
{
    static function isLoggedIn($user)
    {
        if (isset($user)) {
            return true;
        } else {
            return false;
        }
    }
}

$user1 = null;
$user2 = "Paul";

if (Helper::isLoggedIn($user1)) {
    echo "Welcome to the website $user1";
} else {
    echo "Please log in first";
}

if (Helper::isLoggedIn($user2)) {
    echo "Welcome to the website $user2";
} else {
    echo "Please log in first";
}
