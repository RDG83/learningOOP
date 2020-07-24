<?php

trait Father
{
    function hello()
    {
        echo "Father says hello";
    }
}

trait Mother
{
    function goodbye()
    {
        echo "Mother says goodbye";
    }
}

class Child
{
    use Father;
    use Mother;

    function helloGoodbye()
    {
        $this->hello();
        $this->goodbye();
    }
}

$child1 = new Child;

$child1->helloGoodbye();
