<?php

class Post
{
    public $content;

    function __construct($content)
    {
        $this->content = $content;
    }

    function getContent()
    {
        echo $this->content;
        return $this;
    }

    function showContent()
    {
        echo $this->content;
    }
}

$post1 = new Post("I am the content.");

$post1->getContent()->showContent();
