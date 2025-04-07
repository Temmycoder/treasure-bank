<?php

require_once 'controllers/LoanController.php';
$loan = new LoanController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $addLoan = $loan->createLoan($_POST['package'], $_POST['amount'], $_POST['interest'], 
  $_POST['tenor_number'], $_POST['tenor_unit']);
  if($addLoan){
    header('Location: addLoanOffer?success=true');
  }else{
    header('Location: addLoanOffer?error=1');
  }
}