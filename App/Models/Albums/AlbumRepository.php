<?php

require_once __DIR__ . '/Album.php';
require_once __DIR__ . '/AlbumInterface.php';
require_once __DIR__ . '/../Repository.php';

class AlbumRepository implements AlbumInterface{

    public static function add(Album $album){
        $db = Repository::connect();
        $db->prepare('INSERT INTO Albums (idArticle, image) VALUES (:idArticle, :image)', [
            'idArticle' => $album->getIdArticle(),
            'image' => $album->getImage()
        ]);
    }

    public static function delete(int $id){
        $db = Repository::connect();
        $db->prepare('DELETE FROM Albums WHERE id = :id',[
            'id' => $id
        ]);
    }

    public static function find(int $id){
        $db = Repository::connect();
        $response = $db->fetch('SELECT * FROM Albums WHERE id = :id',[
            'id' => $id
        ]);
        $album = Album::load($response['id'], $response['idArticle'], $response['image']);
        return $album;
    }

    public static function findAll(){
        $db = Repository::connect();
        $listeAlbums = array();
        $responses = $db->query('SELECT * FROM Albums');
        while($response = $responses->fetch(PDO::FETCH_ASSOC)){
            array_push($listeAlbums, Album::load($response['id'], $response['idArticle'], $response['image']));
        }
        return $listeAlbums;
    }



}



?>



?>
