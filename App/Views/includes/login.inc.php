<?php

require __DIR__ . '/../../Models/Admins/AdminRepository.php';

if(isset($_POST["submit"])){
    $id = $_POST['login'];
    $pass = $_POST['password'];

    $row = AdminRepository::findWithLogin($id);

    if(empty($row['login'])){
        header("Location: ../login.php?login=userNotFound");
        exit();
    }else{
        if(password_verify($pass, $row['pass'])){

            session_start();
            $_SESSION['id'] = 'admin';
            header("Location: ../login.php?login=success");
            exit();
        }
        else {
            header("Location: ../login.php?login=incorrectPassword");
            exit();
        }
    }





}






?>
