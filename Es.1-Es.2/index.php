<?php

require 'class.php';

class Post
{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct(string $titolo, Category $categoria, string $tag)
    {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }
}

$newPost = new Post('Francesco Totti', new Sport('Calcio'), 'Roma');

var_dump($newPost);
