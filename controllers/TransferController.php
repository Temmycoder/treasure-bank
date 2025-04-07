<?php

require_once "models/Transfer.php";

class TransferController{
  private $transfer;

  public function __construct(){
    $this->transfer = new Transfer();
  }
  public function read(){
    return $this->transfer->read();
  }
  public function newTransfer($amount, $bnfAcc, $bnfBank, $message){
    return $this->transfer->newTransfer($amount, $bnfAcc, $bnfBank, $message);
  }

}