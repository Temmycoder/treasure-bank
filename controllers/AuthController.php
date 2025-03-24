<?php
require_once "models/Login.php";
class AuthController{
  private $user;
  public function __construct(){
    $this->user = new User();
  }
  public function handleLogin($email, $code){
    return $this->user->login($email, $code);
  }
}