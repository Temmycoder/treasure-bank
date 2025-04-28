<?php
require_once 'controllers/TransactionPinController.php';
$pinController = new TransactionPinController();
$pin = $pinController->readPin();
foreach ($pin as $p){}

require_once 'controllers/TransferController.php';
$transfer = new TransferController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $bnfAcc = $_SESSION['bnfAcc'];
  $bnfBank = $_SESSION['bnfBank'];
  $transferAmount = $_SESSION['transferAmount'];
  $message = $_SESSION['message'];

  if($p['transactionPin'] == $_POST['password']){
    $newTransfer = $transfer->newTransfer($transferAmount, $bnfAcc, $bnfBank, 
    $message);
    if($newTransfer){
      header('Location: fundsTransfer?success=true');
    }else{
      header('Location: fundsTransfer?error=1');
    }
  }else{
    header("Location: authTransfer?error=1");
  }
}