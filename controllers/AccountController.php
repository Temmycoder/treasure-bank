<?php
require_once "models/Account.php";
class AccountController{
  private $user;
  public function __construct(){
    $this->user = new Account();
  }
  public function read(){
    return $this->user->read();
  }
}