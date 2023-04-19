<?php

require_once __DIR__ . '/Admin.php';
require_once __DIR__ . '/AdminInterface.php';
require_once __DIR__ . '/../Repository.php';

class AdminRepository implements AdminInterface{

    public static function add(Admin $admin){
        $db = Repository::connect();
        $db->prepare('INSERT INTO Admins (login, pass, creation) VALUES (:login, :pass, :creation)', [
            'login' => $admin->getLogin(),
            'pass' => $admin->getPass(),
            'creation' => $admin->getCreation()
        ]);
    }

    public static function delete(int $id){
        $db = Repository::connect();
        $db->prepare('DELETE FROM Admins WHERE id = :id',[
            'id' => $id
        ]);
    }

    public static function find(int $id){
        $db = Repository::connect();
        $response = $db->fetch('SELECT * FROM Admins WHERE id = :id',[
            'id' => $id
        ]);
        $admin = Admin::load($response['id'], $response['login'], $response['pass'], $response['creation']);
        return $admin;
    }

    public static function findAll(){
        $db = Repository::connect();
        $listeAdmins = [];
        $responses = $db->fetchAll('SELECT * FROM Admins');
        foreach ($responses as $response) {
            $listeAdmins[] = Admin::load($response['id'], $response['login'], $response['pass'], $response['creation']);
        }
        return $listeAdmins;
    }

    public static function findWithLogin($login){
        $db = Repository::connect();
        $req = $db->prepare("SELECT * FROM admins WHERE login =:login", ['login' => $login]);
        $row = $req->fetch(PDO::FETCH_ASSOC);
        return $row;
    }



}



?>
