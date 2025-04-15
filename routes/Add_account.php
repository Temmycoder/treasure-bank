<?php

require_once 'controllers/AccountController.php';
$account = new AccountController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  if($addLoan){
    header('Location: addLoanOffer?success=true');
  }else{
    header('Location: addLoanOffer?error=1');
  }
}