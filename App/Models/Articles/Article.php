<?php

class Article{
    protected $id;
    protected $titre;
    protected $description;
    protected $image;
    protected $album;
    protected $dateUpload;
    protected $vues;


    /* Creation de l'objet Article */
    public static function load($id, $titre, $description, $image, $album, $dateUpload, $vues){
        $article = new self();
        $article->setId($id);
        $article->setTitre($titre);
        $article->setDescription($description);
        $article->setImage($image);
        $article->setAlbum($album);
        $article->setDateUpload($dateUpload);
        $article->setVues($vues);

        return $article;
    }


    /* Getter & Setter ID*/
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
        return $this;
    }



    /* Getter & Setter Titre*/
    public function getTitre(){
        return $this->titre;
    }
    public function setTitre(string $titre){
        $this->titre = $titre;
        return $this;
    }




    /* Getter & Setter Description*/
    public function getDescription(){
        return $this->description;
    }
    public function setDescription(string $description){
        $this->description = $description;
        return $this;
    }




    /* Getter & Setter Image*/
    public function getImage(){
        return $this->image;
    }
    public function setImage(string $image){
        $this->image = $image;
        return $this;
    }




    /* Getter & Setter Album*/
    public function getAlbum(){
        return $this->album;
    }
    public function setAlbum(string $album){
        $this->album = $album;
        return $this;
    }




    /* Getter & Setter DateUpload*/
    public function getDateUpload(){
        return $this->dateUpload;
    }
    public function setDateUpload(string $dateUpload){
        $this->dateUpload = $dateUpload;
        return $this;
    }





    /* Getter & Setter Vues*/
    public function getVues(){
        return $this->vues;
    }
    public function setVues(int $vues){
        $this->vues = $vues;
        return $this;
    }

}

?>
