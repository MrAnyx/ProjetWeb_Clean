<?php

interface AlbumInterface{
    public static function add(Album $album);
    public static function delete(int $id);
    public static function find(int $id);
    public static function findAll();
}

?>
