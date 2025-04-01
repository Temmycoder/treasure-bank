<?php
require_once 'controllers/AdminController.php';
$admin = new AdminController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  function generateRandomCode($length = 6){
    return substr(str_shuffle('0123456789'), 0, $length);
  }
  $fa = generateRandomCode();
  $user_new = $admin->createUsers($_POST['fname'], $_POST['lname'], $_POST['email'], 
  $_POST['code'], $_POST['phone'], $_POST['dob'], $_POST['gender'], $_POST['officer'], $fa);
  if($user_new){
    header('Location: addUsers?success=true');
  }else{
    header('Location: addUsers?error=1');
  }
}