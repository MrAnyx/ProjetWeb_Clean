<?php

interface ArticleInterface{

    public static function add(Article $article);
    public static function update(Article $article);
    public static function delete(int $id);
    public static function find(int $id);
    public static function findAll();
    public static function findLast();

}

?>
