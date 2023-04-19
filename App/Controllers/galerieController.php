<?php

require_once __DIR__ . '/../Models/Articles/Article.php';
require_once __DIR__ . '/../Models/Articles/ArticleRepository.php';


class galerieController{
    public static function showAll(){
        return ArticleRepository::findAll();
    }
}


?>
