<?php

require __DIR__ . '/../Models/Articles/Article.php';
require __DIR__ . '/../Models/Articles/ArticleRepository.php';
require __DIR__ . '/../Models/Commentaires/Commentaire.php';
require __DIR__ . '/../Models/Commentaires/CommentaireRepository.php';



class articleFullController{
    public static function showArticle($id){
        return ArticleRepository::find($id);
    }
    // compte le nombre de commentaires pour chaque article
    public static function nbCom($id){
        return CommentaireRepository::nbCom($id);
    }

    public static function updateViews(Article $article){
        ArticleRepository::update($article);
    }

    public static function showCom($id){
        return CommentaireRepository::comArticle($id);
    }

    public static function showSuggestions($id){
        return ArticleRepository::findLast3($id);
    }

}


?>
