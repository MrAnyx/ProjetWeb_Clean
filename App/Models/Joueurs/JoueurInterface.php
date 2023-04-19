<?php

interface JoueurInterface{

    public static function add(Joueur $joueur);
    public static function delete(int $id);
    public static function findAll();

}

?>
