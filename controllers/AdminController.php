<?php

require_once 'models/admin.php';
class AdminController{

  private $admin;
  public function __construct(){
    $this->admin = new Admin();
  }

  public function read(){
    return $this->admin->read();
  }

  public function readUser($id){
    return $this->admin->readUser($id);
  }

  public function handleUpdateUsers($user_id, $fname, $lname, $phone, $officer, $email){
    return $this->admin->updateUsers($user_id, $fname, $lname, $phone, 
    $officer, $email);
  }
}