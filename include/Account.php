<?php

class Account {

  private $userID;            // integer
  private $username;      // string
  private $password;      // string

  public function __construct($userID, $username, $password) {
    $this->userID = $userID;
    $this->username = $username;
    $this->password = $password;
  }

  public function getUserID(){
    return $this->userID;
  }


  public function getUsername(){
    return $this->username;
  }

  public function getPassword(){
    return $this->password;
  }
}

?>
