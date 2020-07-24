<?php

class Post
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

function compare1($obj1, $obj2)
{
    if ($obj1 === $obj2) {
        return true;
    } else {
        return false;
    }
}

function compare2($obj1, $obj2)
{
    if ($obj1 == $obj2) {
        return true;
    } else {
        return false;
    }
}

$post1 = new Post("one");
$post2 = $post1;
$post3 = clone $post1;
$post4 = new Post("one");

//compare1 identical operator
echo compare1($post1, $post2) ? "same" : "different";
echo "<br>";
echo compare1($post1, $post3) ? "same" : "different";
echo "<br>";
echo compare1($post1, $post4) ? "same" : "different";
echo "<br>";
echo compare1($post2, $post3) ? "same" : "different";
echo "<br>";
echo compare1($post2, $post4) ? "same" : "different";
echo "<br>";
echo compare1($post3, $post4) ? "same" : "different";
echo "<br>";
// only first case will return same as the point to the same instance
// even though the values are the same, they are not the same instance and therefore different

//compare2 equal operator
echo compare2($post1, $post2) ? "same" : "different";
echo "<br>";
echo compare2($post1, $post3) ? "same" : "different";
echo "<br>";
echo compare2($post1, $post4) ? "same" : "different";
echo "<br>";
echo compare2($post2, $post3) ? "same" : "different";
echo "<br>";
echo compare2($post2, $post4) ? "same" : "different";
echo "<br>";
echo compare2($post3, $post4) ? "same" : "different";
// all will be same as the values are all the same
