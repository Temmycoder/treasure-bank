<?php

require_once "models/Loans.php";

class LoanController{
  private $loan;

  public function __construct(){
    $this->loan = new Loan();
  }

  public function createLoan($package, $amount, $interest, $tenor_number, $tenor_unit){
    return $this->loan->createLoan($package, $amount, $interest, $tenor_number, $tenor_unit);
  }

  public function readLoans(){
    return $this->loan->readLoans();
  }
}