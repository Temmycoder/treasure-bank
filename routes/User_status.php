<?php

require_once "controllers/Admincontroller.php";
$admin = new AdminController();
session_start();

if(isset($_GET['id'])){
  if(isset($_GET['status'])){
    if($_GET['status'] == '1'){
      $user_id = $_GET['id'];
      $admin = $admin->handleDeactivateUsers($user_id);
    }else{
      $user_id = $_GET['id'];
      $admin = $admin->handleActivateUsers($user_id);
    }
    if($_GET['role'] == 'user'){
      header("location: /treasurebank/manageUsers");
    }else{
      header("location: /treasurebank/manageAdmins");
    }
  }
}