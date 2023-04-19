<?php

require_once __DIR__ . '/Contact.php';
require_once __DIR__ . '/ContactInterface.php';
require_once __DIR__ . '/../Repository.php';



class ContactRepository implements ContactInterface{

    public static function add(Contact $contact){
        $db = Repository::connect();
        $db->prepare('INSERT INTO Contacts (nom, prenom, mail, objet, message, date_envoi) VALUES (:nom, :prenom, :mail, :objet, :message, :date_envoi)', [
            'nom' => $contact->getNom(),
            'prenom' => $contact->getPrenom(),
            'mail' => $contact->getMail(),
            'objet' => $contact->getObjet(),
            'message' => $contact->getMessage(),
            'date_envoi' => $contact->getDateEnvoi()
        ]);
    }


    public static function delete(int $id){
        $db = Repository::connect();
        $db->prepare('DELETE FROM Contacts WHERE id= :id', [
            'id' => $id
        ]);
    }





    public static function findAll(){
        $db = Repository::connect();
        $listeContacts = [];
        $responses = $db->fetchAll('SELECT * FROM Contacts');
        foreach($reponses as $response){
            $listeContacts[] = Contact::load($response['id'], $response['nom'], $response['prenom'], $response['mail'], $response['objet'], $response['message'], $response['date_envoi']);
        }
        return $listeContacts;
    }
}

?>
