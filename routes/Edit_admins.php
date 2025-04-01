<?php

require_once 'controllers/AdminController.php';
$admin = new AdminController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $update = $admin->handleUpdateAdmins($_POST['admin_id'], $_POST['fname'], $_POST['lname'], 
  $_POST['phone'], $_POST['email']);

  if($update){
    header("Location: /treasurebank/manageAdmins");
  }else{
    header("Location: /treasurebank/editAdmins?error=1&adminid=$_POST[admin_id]");
  }
}