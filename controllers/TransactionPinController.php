<?php

require_once "models/TransactionPin.php";

class TransactionPinController{
  private $TransactionPin;

  public function __construct(){
    $this->TransactionPin = new TransactionPin();
  }
  public function setTransactionPin($pin){
    return $this->TransactionPin->setTransactionPin($pin);
  }
  public function readPin(){
    $read = $this->TransactionPin->readPin();
    return $read;
  }
}