<?php 

require_once "controllers/AuthController.php";

$auth = new AuthController;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $auth->handleLogin($_POST['email'], $_POST['code']);
  if($user){
    if($_SESSION['role'] == 'user'){
      header('Location: /treasurebank/dashboard');
    }else{
      header('Location: /treasurebank/adminDashboard');
    }
  }else{
    header('Location: /treasurebank/index?error=1');
  }
}