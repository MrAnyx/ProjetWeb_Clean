<?php


function isActive(array $link) {
  if(stripos($_SERVER['REQUEST_URI'],$link['liens'])){
    return true;
  } else{
    return false;
  }
}

function isAdmin(){
  if( isset($_SESSION['id']) && $_SESSION['id']==='admin' ){
    return true;
  } else {
    return false;
  }
}

?>
