<?php
require_once 'controllers/BeneficiaryController.php';
$beneficiary = new BeneficiaryController();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $bnf = $beneficiary->addBeneficiary($_POST['bnfAcc'], $_POST['bnfBank']);
  if($bnf){
    header('Location: beneficiaries?success=true');
  }else{
    header('Location: beneficiaries?error=1');
  }
}