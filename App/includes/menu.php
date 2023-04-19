<?php

    $page = $_SERVER['REQUEST_URI'];

    $menus[0]['liens'] = 'index.php';
    $menus[0]['nom'] = 'Accueil';

    $menus[1]['liens'] = 'galerie.php';
    $menus[1]['nom'] = 'Galerie';

    $menus[2]['liens'] = 'contact.php';
    $menus[2]['nom'] = 'Contact';

    $menus[3]['liens'] = 'articles.php';
    $menus[3]['nom'] = 'Articles';

    $menus[4]['liens'] = 'roster.php';
    $menus[4]['nom'] = 'Roster';


    if(!isAdmin()){
        $menus[5]['liens'] = 'login.php';
        $menus[5]['nom'] = 'Connexion';
    }


?>
