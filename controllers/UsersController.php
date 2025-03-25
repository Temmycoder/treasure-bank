<?php
require_once 'models/users.php';
class UsersController{
  private $user;
  public function __construct(){
    $this->user = new Users();
  }
  public function handleSignUp($fname, $lname, $email, $code, $phone, $dob, $gender){
    return $this->user->create($fname, $lname, $email, $code, 
    $phone, $dob, $gender);
  }
  public function handleChangeCode($id, $old, $new){
    $change =  $this->user->changeCode($id, $old, $new);
    return $change;
  }
  public function handleEditProfile($id, $fname, $lname, $phone, $email){
    $change =  $this->user->update($id, $fname, $lname, $phone, $email);
    return $change;
  }
}