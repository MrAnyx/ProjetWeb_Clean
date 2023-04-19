<?php

interface ContactInterface{

    public static function add(Contact $contact);
    public static function delete(int $id);
    public static function findAll();

}

?>
