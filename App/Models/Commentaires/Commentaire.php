<?php

class Commentaire{
    protected $id;
    protected $numArticle;
    protected $nom;
    protected $commentaire;
    protected $dateCommentaire;


    /* Creation de l'objet Commentaire */
    public static function load($id, $numArticle, $nom, $commentaire, $dateCommentaire){
        $commentairef = new self();
        $commentairef->setId($id);
        $commentairef->setNumArticle($numArticle);
        $commentairef->setNom($nom);
        $commentairef->setCommentaire($commentaire);
        $commentairef->setDateCommentaire($dateCommentaire);

        return $commentairef;
    }


    /* Getter & Setter ID*/
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
        return $this;
    }



    /* Getter & Setter NumArticle*/
    public function getNumArticle(){
        return $this->numArticle;
    }
    public function setNumArticle(int $numArticle){
        $this->numArticle = $numArticle;
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




    /* Getter & Setter Commentaire*/
    public function getCommentaire(){
        return $this->commentaire;
    }
    public function setCommentaire(string $commentaire){
        $this->commentaire = $commentaire;
        return $this;
    }





    /* Getter & Setter DateCommentaire*/
    public function getDateCommentaire(){
        return $this->dateCommentaire;
    }
    public function setDateCommentaire(string $dateCommentaire){
        $this->dateCommentaire = $dateCommentaire;
        return $this;
    }

}

?>
