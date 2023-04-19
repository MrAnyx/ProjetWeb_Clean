<?php

class Admin{
    protected $id;
    protected $login;
    protected $pass;
    protected $creation;



    /* Creation de l'objet Admin */
    public static function load($id, $login, $pass, $creation){
        $admin = new self();
        $admin->setId($id);
        $admin->setLogin($login);
        $admin->setPass($pass);
        $admin->setCreation($creation);

        return $admin;
    }


    /* Getter & Setter ID*/
    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
        return $this;
    }



    /* Getter & Setter Login*/
    public function getLogin(){
        return $this->login;
    }
    public function setLogin(string $login){
        $this->login = $login;
        return $this;
    }




    /* Getter & Setter Password*/
    public function getPass(){
        return $this->pass;
    }
    public function setPass(string $pass){
        $this->pass = $pass;
        return $this;
    }




    /* Getter & Setter Creation*/
    public function getCreation(){
        return $this->creation;
    }
    public function setCreation(string $creation){
        $this->creation = $creation;
        return $this;
    }

}

?>
