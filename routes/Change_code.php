<?php
require_once 'controllers/UsersController.php';
$user = new UsersController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  session_start();
  $id = $_SESSION['id'];
  $code = $_SESSION['code'];
  if($_POST['old'] === $code){
    if($_POST['new'] === $_POST['confirm']){
      $change = $user->handleChangeCode($id, $_POST['old'], $_POST['new']);
      if($change){
        header("Location: /treasurebank/change_password?success=true");
      }else{
        header("Location: /treasurebank/change_password?unsuccessful=0");
      }
    }else{
      header("Location: /treasurebank/change_password?confirmError=1");
    }
  }else{
    header("Location: /treasurebank/change_password?oldError=1");
  }
}