<?php
// data subscription route for inputed phone number
require_once 'controllers/TransactionPinController.php';
$pinController = new TransactionPinController();
$pin = $pinController->readPin();
foreach ($pin as $p){}

require_once 'controllers/DataSubController.php';
$dataSub = new DataSubController();
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  if($p['transactionPin'] == $_POST['password']){
    $newDataSub = $dataSub->newDataSub($_SESSION['amount'], $_SESSION['size'], 
    $_POST['phone'], $_POST['network']);

    if($newDataSub){
      header("Location: PickDataPlan?success=true&plan=$_SESSION[plan]");
    }else{
      header("Location: PickDataPlan?error=1&plan=$_SESSION[plan]");
    }
  }else{
    header("Location: authDataSub?error=1&size=$_SESSION[size]&amount=$_SESSION[amount]");
  }
}