<?php


// renvoie true si l'utilisateur est connnecté et false si c'est pas le cas
function isAdmin(){
    if(isset($_SESSION['id'])){
        return true;
    } else{
        return false;
    }
}


// pour le menu (ajoute la class active à la page courante)
function isActive(array $link) {
    if(stripos($_SERVER['REQUEST_URI'],$link['liens'])){
        return true;
    } else{
        return false;
    }
}


//indique si le mot cherché est valide ou non (si il y a plusieurs mots => pas valide)
function searchNotAvailable(){
    if(isset($_GET['error']) && $_GET['error'] == "notAvailable"){
        return true;
    }
    else{
        return false;
    }
}


// lance la requete sql pour rechercher les articles correspondants a la recherche
function doSearch(){
    if(isset($_GET['word'])){
        return true;
    }
    else{
        return false;
    }
}

?>
