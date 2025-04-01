<?php
require_once 'controllers/AdminController.php';
$admin = new AdminController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  function generateRandomCode($length = 6){
    return substr(str_shuffle('0123456789'), 0, $length);
  }
  $fa = generateRandomCode();
  $admin_new = $admin->createAdmins($_POST['fname'], $_POST['lname'], $_POST['email'], 
  $_POST['code'], $_POST['phone'], $_POST['dob'], $_POST['gender'], $fa);
  if($admin_new){
    header('Location: addAdmins?success=true');
  }else{
    header('Location: addAdmins?error=1');
  }
}