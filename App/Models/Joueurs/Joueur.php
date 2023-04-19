<?php

class Joueur{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $numero;
    protected $position;
    protected $taille;
    protected $poids;


    /* Creation de l'objet Joueur */
    public static function load($id, $nom, $prenom, $numero, $position, $taille, $poids){
        $joueur = new self();
        $joueur->setId($id);
        $joueur->setNom($nom);
        $joueur->setPrenom($prenom);
        $joueur->setNumero($numero);
        $joueur->setPosition($position);
        $joueur->setTaille($taille);
        $joueur->setpoids($poids);

        return $joueur;
    }


    /* Getter & Setter ID*/
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
        return $this;
    }



    /* Getter & Setter Nom*/
    public function getNom(){
        return $this->nom;
    }
    public function setNom(string $nom){
        $this->nom = $nom;
        return $this;
    }




    /* Getter & Setter Prenom*/
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
        return $this;
    }




    /* Getter & Setter Numero*/
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero(string $numero){
        $this->numero = $numero;
        return $this;
    }




    /* Getter & Setter Position*/
    public function getPosition(){
        return $this->position;
    }
    public function setPosition(string $position){
        $this->position = $position;
        return $this;
    }




    /* Getter & Setter Taille*/
    public function getTaille(){
        return $this->taille;
    }
    public function setTaille(string $taille){
        $this->taille = $taille;
        return $this;
    }





    /* Getter & Setter Poids*/
    public function getPoids(){
        return $this->poids;
    }
    public function setPoids(string $poids){
        $this->poids = $poids;
        return $this;
    }

}

?>
