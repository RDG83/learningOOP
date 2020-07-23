<?php

class Calculator
{
    static public $result;

    static function add($a, $b)
    {
        self::$result = $a + $b;
    }
}

Calculator::add(2, 4);
echo Calculator::$result;
