<?php

class Album{

    protected $id;
    protected $idArticle;
    protected $image;



    /* Creation de l'objet Album */
    public static function load($id, $idArticle, $image){
        $album = new self();
        $album->setId($id);
        $album->setIdArticle($idArticle);
        $album->setImage($image);
        return $album;
    }


    /* Getter & Setter ID*/
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
        return $this;
    }



    /* Getter & Setter idArticle*/
    public function getIdArticle(){
        return $this->idArticle;
    }
    public function setIdArticle(int $idArticle){
        $this->idArticle = $idArticle;
        return $this;
    }



    /* Getter & Setter image*/
    public function getImage(){
        return $this->image;
    }
    public function setImage(string $image){
        $this->image = $image;
        return $this;
    }

}

?>
