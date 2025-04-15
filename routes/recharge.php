<?php

require_once 'controllers/RechargeController.php';
$recharge = new RechargeController();
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_SESSION['code'] == $_POST['password']){
    $newRecharge = $recharge->newRecharge($_SESSION['amount'], $_SESSION['phone'], $_SESSION['network']);
    if($newRecharge){
      header('Location: buyAirtime?success=true');
    }else{
      header('Location: buyAirtime?error=1');
    }
  }else{
    header('Location: authRecharge?error=1');
  }
}