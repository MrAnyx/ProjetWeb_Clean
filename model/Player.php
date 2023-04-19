<?php

class Player{
  protected $nom;
  protected $prenom;
  protected $numero;
  protected $position;
  protected $taille;
  protected $poids;

  public static function load($nom, $prenom, $numero, $position, $taille, $poids)
  {
    $user = new self();
    $user->setNom($nom);
    $user->setPrenom($prenom);
    $user->setNumero($numero);
    $user->setPosition($position);
    $user->setTaille($taille);
    $user->setPoids($poids);
    return $user;
  }

  public function getNom(){
    return $this->nom;
  }
  public function setNom(string $nom):self{
    $this->nom = $nom;
    return $this;
  }

  public function getPrenom(){
    return $this->prenom;
  }
  public function setPrenom(string $prenom):self{
    $this->prenom = $prenom;
    return $this;
  }

  public function getNumero(){
    return $this->numero;
  }
  public function setNumero(string $numero):self{
    $this->numero = $numero;
    return $this;
  }

  public function getPosition(){
    return $this->position;
  }
  public function setPosition(string $position):self{
    $this->position = $position;
    return $this;
  }

  public function getTaille(){
    return $this->taille;
  }
  public function setTaille(string $taille):self{
    $this->taille = $taille;
    return $this;
  }

  public function getPoids(){
    return $this->poids;
  }
  public function setPoids(string $poids):self{
    $this->poids = $poids;
    return $this;
  }


}

?>
