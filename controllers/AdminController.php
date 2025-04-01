<?php

require_once 'models/admin.php';
class AdminController{

  private $admin;
  public function __construct(){
    $this->admin = new Admin();
  }

  public function createUsers($fname, $lname, $email, $code, $phone, $dob, $gender, $officer, $fa){
    return $this->admin->createUsers($fname, $lname, $email, $code, $phone, 
    $dob, $gender, $officer, $fa);
  }

  public function createAdmins($fname, $lname, $email, $code, $phone, $dob, $gender, $fa){
    return $this->admin->createAdmins($fname, $lname, $email, $code, $phone, 
    $dob, $gender, $fa);
  }

  public function read(){
    return $this->admin->read();
  }

  public function readUser($adminid){
    return $this->admin->readUser($adminid);
  }

  public function readAdmins(){
    return $this->admin->readAdmins();
  }

  public function handleUpdateUsers($user_id, $fname, $lname, $phone, $officer, $email){
    return $this->admin->updateUsers($user_id, $fname, $lname, $phone, 
    $officer, $email);
  }

  public function handleUpdateAdmins($admin_id, $fname, $lname, $phone, $email){
    return $this->admin->updateAdmins($admin_id, $fname, $lname, $phone, $email);
  }

  public function handleDeactivateUsers($user_id){
    return $this->admin->deactivateUsers($user_id);
  }

  public function handleActivateUsers($user_id){
    return $this->admin->activateUsers($user_id);
  }
}