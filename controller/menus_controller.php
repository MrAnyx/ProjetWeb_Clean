<?php
$menus[] = ['liens'=>'index.php','nom'=>'Accueil'];
$menus[] = ['liens'=>'galerie.php','nom'=>'Galerie'];
$menus[] = ['liens'=>'contact.php','nom'=>'Contact'];
$menus[] = ['liens'=>'articles.php','nom'=>'Articles'];
$menus[] = ['liens'=>'roster.php','nom'=>'Roster'];
if(!isAdmin()){
  $menus[] =['liens'=>'login.php','nom'=>'Connexion'];
}
?>
