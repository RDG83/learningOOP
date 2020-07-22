<?php
class Calculator
{

    public $a;
    public $b;
    public $result;

    function setA($a)
    {
        $this->a = $a;
    }

    function setB($b)
    {
        $this->b = $b;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function add()
    {
        $this->result = $this->a + $this->b;
    }

    function getResults()
    {
        echo $this->result;
    }
}

$calc = new Calculator;

$calc->setA(3);
$calc->setB(6);

$calc->add();

$calc->getResults();
