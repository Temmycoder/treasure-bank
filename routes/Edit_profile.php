<?php
require_once 'controllers/UsersController.php';
$user = new UsersController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  session_start();
  $id = $_SESSION['id'];
  $update = $user->handleEditProfile($id, $_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email']);
  if($update){
    header('Location: /treasurebank/edit_profile?success=true');
  }else{
    header('Location: /treasurebank/edit_profile?error=1');
  }
}