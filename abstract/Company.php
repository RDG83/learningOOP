<?php

abstract class Company
{

    protected $name;

    abstract function setSubject($subject);

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}
