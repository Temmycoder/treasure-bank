<?php

require_once "models/Recharge.php";

class RechargeController{
  private $recharge;

  public function __construct(){
    $this->recharge = new Recharge();
  }
  public function newRecharge($amount, $phone, $network){
    return $this->recharge->newRecharge($amount, $phone, $network);
  }

}