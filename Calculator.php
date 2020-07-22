<?php
class Calculator
{

    public $a;
    public $b;
    public $result;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;

        echo $this->a + $this->b;
    }

    function getResults()
    {
        return $this->result;
    }

    function __destruct()
    {
        echo "All values reset.";
    }
}

$calc = new Calculator(12, 34);
