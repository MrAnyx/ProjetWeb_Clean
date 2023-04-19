<?php

require_once __DIR__ . '/../Models/Articles/Article.php';
require_once __DIR__ . '/../Models/Articles/ArticleRepository.php';


class indexController{
    public static function showIndex(){
        return ArticleRepository::findLast();
    }
}


?>
