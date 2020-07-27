<?php

require_once "Database.php";

class Post
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPosts()
    {
        $this->db->query("SELECT * FROM posts");
        $results = $this->db->resultset();
        return $results;
    }

    public function getPostById($id)
    {
        $this->db->query("SELECT * FROM `posts` WHERE id= :id");
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function insertPost($data)
    {
        $this->db->query("INSERT INTO posts (title, content) VALUES (:title, :content)");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updatePost($data)
    {
        $this->db->query("UPDATE posts SET title = :title, content = :content WHERE id = :id ");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deletePost($id)
    {
        $this->db->query("DELETE FROM `posts` WHERE id= :id");
        $this->db->bind(":id", $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
