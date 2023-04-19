<?php

require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/ArticleInterface.php';
require_once __DIR__ . '/../Repository.php';



class ArticleRepository implements ArticleInterface{

    public static function add(Article $article){
        $db = Repository::connect();
        $db->prepare('INSERT INTO Articles (id, titre, description, image, album, date_upload, vues) VALUES (:id, :titre, :description, :image, :album, :date_upload, :vues)', [
            'id' => $article->getId(),
            'titre' => $article->getTitre(),
            'description' => $article->geDescription(),
            'image' => $article->getImage(),
            'album' => $article->getAlbum(),
            'date_upload' => $article->getDateUpload(),
            'vues' => $article->getVues(),
        ]);
    }


    public static function update(Article $article){
        $db = Repository::connect();
        $vues = $article->getVues();
        $vues++;
        $db->prepare('UPDATE Articles SET vues = :vues WHERE id = :id', [
            'vues' => $vues,
            'id' => $article->getId()
        ]);
    }





    public static function delete(int $id){
        $db = Repository::connect();
        $db->prepare('DELETE FROM Articles WHERE id = :id', [
            'id' => $id
        ]);
    }



    public static function find(int $id){
        $db = Repository::connect();
        $response = $db->prepare('SELECT * FROM Articles WHERE id = :id');
        $response->execute(['id' => $id]);
        if($response->rowCount() == 0){
            return null;
        }else{
            if($response->rowCount() == 1){
                $response = $response->fetch(PDO::FETCH_ASSOC);
                $article = Article::load($response['id'], $response['titre'], $response['description'], $response['image'], $response['album'], $response['date_upload'], $response['vues']);
                return $article;
            }
            else{
                $listeArticles = array();
                while($row = $response->fetch(PDO::FETCH_ASSOC)){
                    array_push($listeArticles, Article::load($row['id'], $row['titre'], $row['description'], $row['image'], $row['album'], $row['date_upload'], $row['vues']));
                }
                return $listeArticles;
            }
        }
    }


    public static function findLast(){
        $db = Repository::connect();
        $response = $db->query("SELECT * FROM Articles ORDER BY id DESC LIMIT 1");
        if($response->rowCount() == 0){
            return null;
        }
        else{
            $response = $response->fetch(PDO::FETCH_ASSOC);
            $article = Article::load($response['id'], $response['titre'], $response['description'], $response['image'], $response['album'], $response['date_upload'], $response['vues']);
            return $article;
        }


    }


    public static function findAll(){
        $db = Repository::connect();
        $listeArticles = array();
        $responses = $db->query('SELECT * FROM Articles');

        if($responses->rowCount() == 0){
            return null;
        }
        else{

            while($row = $responses->fetch(PDO::FETCH_ASSOC)){
                array_push($listeArticles, Article::load($row['id'], $row['titre'], $row['description'], $row['image'], $row['album'], $row['date_upload'], $row['vues']));
            }
            return $listeArticles;

        }
    }



    public static function findAllSearch($word){
        $db = Repository::connect();
        $responses = $db->prepare('SELECT * FROM articles WHERE titre LIKE :titre1 COLLATE UTF8_GENERAL_CI OR description LIKE :titre2 COLLATE UTF8_GENERAL_CI ORDER BY id DESC');
        $response->execute(['titre1' => $word, 'titre2' => $word]);
        if($responses->rowCount() == 0){
            return null;
        }
        else{

            $listeArticles = array();
            while($row = $responses->fetch(PDO::FETCH_ASSOC)){
                array_push($listeArticles, Article::load($row['id'], $row['titre'], $row['description'], $row['image'], $row['album'], $row['date_upload'], $row['vues']));

            }
            return $listeArticles;

        }
    }




    public static function findLast3($id){
        $db = Repository::connect();
        $responses = $db->prepare('SELECT * FROM articles WHERE id != :id ORDER BY id DESC LIMIT 3', [
            'id' => $id
        ]);
        if($responses->rowCount() == 0){
            return null;
        }
        else{

            $listeArticles = array();
            while($row = $responses->fetch(PDO::FETCH_ASSOC)){
                array_push($listeArticles, Article::load($row['id'], $row['titre'], $row['description'], $row['image'], $row['album'], $row['date_upload'], $row['vues']));

            }
            return $listeArticles;

        }
    }







}

?>
