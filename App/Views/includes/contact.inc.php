<?php

require __DIR__ . '/../../Models/Contacts/ContactRepository.php';

if (isset($_POST['submit'])) {

    $id = 0;
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
    $date = date("Y-n-j");

    $contact = Contact::load($id, $nom, $prenom, $mail, $objet, $message, $date);
    ContactRepository::add($contact);

    header("Location: ../contact.php?contact=success");
}



?>
