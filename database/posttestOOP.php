<?php

require_once "Post.php";

$post = new Post();

// SELECT ALL
// var_dump($post->getPosts());

// // SELECT ONE
// var_dump($post->getPostById(3));

// // // INSERT ONE
// $data = ["title" => "pippin", "content" => "Ppippin is a useless turd who almost gets everyone killed in moria"];
// $post->insertPost($data);
// var_dump($post->getPosts());

// $updatedata = ["title" => "aragorn", "content" => "It's Aragorn, the king has returned.", "id" => 3];
// $post->updatePost($updatedata);
// var_dump($post->getPosts());

$post->deletePost(6);
var_dump($post->getPosts());
