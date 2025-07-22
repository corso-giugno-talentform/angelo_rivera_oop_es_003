<?php
//Definition

abstract class Category
{
    abstract public function getMyCategory();
}


class News extends Category
{
    public function getMyCategory() {}
}

class Sport extends Category
{
    public function getMyCategory() {}
}

class Gossip extends Category
{
    public function getMyCategory() {}
}

class Storia extends Category
{
    public function getMyCategory() {}
}
