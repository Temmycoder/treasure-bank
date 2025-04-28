<?php
require_once 'controllers/TransactionPinController.php';
$user = new TransactionPinController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  session_start();
  $set = $user->setTransactionPin($_POST['pin']);
  if($set){
    header("Location: transactionPin?success=true");
  }else{
    header("Location: transactionPin?unsuccessful=0");
  }
}