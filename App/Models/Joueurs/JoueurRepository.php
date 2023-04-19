<?php

require_once __DIR__ . '/Joueur.php';
require_once __DIR__ . '/JoueurInterface.php';
require_once __DIR__ . '/../Repository.php';



class JoueurRepository implements JoueurInterface{

    public static function add(Joueur $joueur){
        $db = Repository::connect();
        $db->prepare('INSERT INTO Joueurs (id, nom, prenom, numero, position, taille, poids) VALUES (:id, :nom, :prenom, :numero, :position, :taille, :poids)', [
            'id' => $joueur->getId(),
            'nom' => $joueur->getNom(),
            'prenom' => $joueur->getPrenom(),
            'numero' => $joueur->getNumero(),
            'position' => $joueur->getPosition(),
            'taille' => $joueur->getTaille(),
            'poids' => $joueur->getPoids(),
        ]);
    }


    public static function delete(int $id){
        $db = Repository::connect();
        $db->prepare('DELETE FROM Joueurs WHERE id = :id', [
            'id' => $id
        ]);
    }



    public static function findAll(){
        $db = Repository::connect();
        $listeJoueurs = array();
        $responses = $db->query('SELECT * FROM Joueurs');

        if($responses->rowCount() == 0){
            return null;
        }else{

            while($response = $responses->fetch(PDO::FETCH_ASSOC)){
                array_push($listeJoueurs, Joueur::load($response['id'], $response['nom'], $response['prenom'], $response['numero'], $response['position'], $response['taille'], $response['poids']));
            }
            return $listeJoueurs;
        }
    }

}

?>
