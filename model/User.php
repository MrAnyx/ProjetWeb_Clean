<?php

class User{
  protected $login;
  protected $pass;
  protected $creation;

  public static function load($login, $pass, $creation)
  {
    $user = new self();
    $user->setLogin($login);
    $user->setPass($pass);
    $user->setCreation($creation);
    return $user;
  }

  public function getLogin(){
    return $this->login;
  }

  public function setLogin(string $login):self{
    $this->login = $login;
    return $this;
  }

  public function getPass(){
    return $this->pass;
  }

  public function setPass(string $pass):self{
    $this->pass = $pass;
    return $this;
  }

  public function getCreation(){
    return $this->creation;
  }

  public function setCreation(string $creation):self{
    $this->creation = $creation;
    return $this;
  }


}

?>
