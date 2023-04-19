<?php

require_once __DIR__ . '/Commentaire.php';
require_once __DIR__ . '/CommentaireInterface.php';
require_once __DIR__ . '/../Repository.php';

class CommentaireRepository implements CommentaireInterface{

    public static function add(Commentaire $commentaire){
        $db = Repository::connect();
        $db->prepare('INSERT INTO Commentaires (numArticle, nom, commentaire, date_commentaire) VALUES (:login, :pass, :creation, :date_commentaire)', [
            'numArticle' => $commentaire->getNumArticle(),
            'nom' => $commentaire->getNom(),
            'commentaire' => $commentaire->getCommentaire(),
            'date_commentaire' => $commentaire->getDateCommentaire()
        ]);
    }

    public static function delete(int $id){
        $db = Repository::connect();
        $db->prepare('DELETE FROM Commentaire WHERE id = :id',[
            'id' => $id
        ]);
    }

    public static function findAll(){
        $db = Repository::connect();
        $listeCommentaires = [];
        $responses = $db->fetchAll('SELECT * FROM Commentaires');
        foreach ($responses as $response) {
            $listeCommentaires[] = Commentaire::load($response['id'], $response['numArticle'], $response['nom'], $response['commentaire'], $response['date_commentaire']);
        }
        return $listeCommentaires;
    }


    //renvoie le nombre de commentaire pour un article précis
    public static function nbCom($id){
        $db = Repository::connect();
        $responses = $db->prepare('SELECT Count(id) as nbCom FROM Commentaires WHERE numArticle=:id',
        ['id' => $id]);
        $tmp = $responses->fetch(PDO::FETCH_ASSOC);
        return $tmp['nbCom'];
    }

    public static function comArticle($numArticle){
        $db = Repository::connect();
        $responses = $db->prepare('SELECT * FROM commentaires WHERE numArticle = :numArticle ORDER BY id DESC',[
            'numArticle' => $numArticle
        ]);

        if($responses->rowCount() == 0){
            return null;
        }
        else{
            $listeCommentaires = array();
            while($response = $responses->fetch(PDO::FETCH_ASSOC)){
                $article = Commentaire::load($response['id'], $response['numArticle'], $response['nom'], $response['commentaire'], $response['date_commentaire']);
                array_push($listeCommentaires, $article);
            }
            return $listeCommentaires;
        }
    }



}



?>
