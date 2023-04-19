<?php

interface AdminInterface{

    public static function add(Admin $admin);
    public static function delete(int $id);
    public static function find(int $id);
    public static function findAll();

}

?>
