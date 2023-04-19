<?php

require __DIR__ . '/../Models/Joueurs/Joueur.php';
require __DIR__ . '/../Models/Joueurs/JoueurRepository.php';

class rosterController{
    public static function selectAllPlayers(){
        return JoueurRepository::findAll();
    }
}

?>
