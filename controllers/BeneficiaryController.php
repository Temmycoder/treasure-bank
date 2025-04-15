<?php

require_once "models/Beneficiary.php";

class BeneficiaryController{
  private $beneficiary;

  public function __construct(){
    $this->beneficiary = new Beneficiary();
  }

  public function addBeneficiary($bnfAcc, $bnfBank){
    return $this->beneficiary->addBeneficiary($bnfAcc, $bnfBank);
  }

}
