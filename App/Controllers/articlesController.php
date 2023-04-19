<?php

require_once __DIR__ . '/../Models/Articles/Article.php';
require_once __DIR__ . '/../Models/Articles/ArticleRepository.php';
require_once __DIR__ . '/../Models/Commentaire.php';
require_once __DIR__ . '/../Models/CommentaireRepository.php';


class articlesController{
    //renvoie tous les articles
    public static function showAll(){
        return ArticleRepository::findAll();
    }

    //renvoie les articles correspondants a la recherche
    public static function showSearch($word){
        return ArticleRepository::findAllSearch($word);
    }

    // compte le nombre de commentaires pour chaque article
    public static function nbCom($id){
        return CommentaireRepository::nbCom($id);
    }

}


?>
