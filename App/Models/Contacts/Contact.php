<?php

class Contact{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $objet;
    protected $message;
    protected $dateEnvoi;


    /* Creation de l'objet Contact */
    public static function load($id, $nom, $prenom, $mail, $objet, $message, $dateEnvoi){
        $contact = new self();
        $contact->setId($id);
        $contact->setNom($nom);
        $contact->setPrenom($prenom);
        $contact->setMail($mail);
        $contact->setObjet($objet);
        $contact->setMessage($message);
        $contact->setDateEnvoi($dateEnvoi);

        return $contact;
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




    /* Getter & Setter Mail*/
    public function getMail(){
        return $this->mail;
    }
    public function setMail(string $mail){
        $this->mail = $mail;
        return $this;
    }




    /* Getter & Setter Objet*/
    public function getObjet(){
        return $this->objet;
    }
    public function setObjet(string $objet){
        $this->objet = $objet;
        return $this;
    }




    /* Getter & Setter Message*/
    public function getMessage(){
        return $this->message;
    }
    public function setMessage(string $message){
        $this->message = $message;
        return $this;
    }





    /* Getter & Setter DateEnvoie*/
    public function getDateEnvoi(){
        return $this->dateEnvoi;
    }
    public function setDateEnvoi(string $dateEnvoi){
        $this->dateEnvoi = $dateEnvoi;
        return $this;
    }

}

?>
