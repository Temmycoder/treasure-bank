<?php
require_once 'controllers/UsersController.php';
$user = new UsersController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  function generateRandomCode($length = 6){
    return substr(str_shuffle('0123456789'), 0, $length);
  }
  $fa = generateRandomCode();
  $user_new = $user->handleSignUp($_POST['fname'], $_POST['lname'], $_POST['email'], 
  $_POST['code'], $_POST['phone'], $_POST['dob'], $_POST['gender'], $fa);
  if($user_new){
    header('Location: /treasurebank/index?success=true');
  }else{
    header('Location: /treasurebank/signup?error=1');
  }
}