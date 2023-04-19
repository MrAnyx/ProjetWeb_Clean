<?php

interface CommentaireInterface{

    public static function add(Commentaire $commentaire);
    public static function delete(int $id);
    public static function findAll();

}

?>
