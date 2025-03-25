<?php

require_once 'controllers/AdminController.php';
$admin = new AdminController();
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $user_id = $_SESSION['user_id'];
  $update = $admin->handleUpdateUsers($user_id, $_POST['fname'], $_POST['lname'], $_POST['phone'], 
  $_POST['officer'], $_POST['email']);

  if($update){
    header("Location: /treasurebank/manageUsers");
  }else{
    header("Location: /treasurebank/editUsers?error=1");
  }
}