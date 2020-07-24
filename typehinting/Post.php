<?php

declare(strict_types=1);

class Post
{
    function savePost(string $content): bool
    {
        $flag = false;
        if (true) {
            $flag = true;
        }
        return $flag;
    }

    function fetchPost(int $id): string
    {
        return "Succesfully found post with id: $id. <br>";
    }
}

$post1 = new Post;

$post1->savePost("Hello this is a string");
echo $post1->fetchPost(101);
