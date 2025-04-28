<?php

require_once "models/DataSub.php";

class DataSubController{
  private $dataSub;

  public function __construct(){
    $this->dataSub = new DataSub();
  }
  public function newDataSub($amount, $size, $phone, $network){
    return $this->dataSub->newDataSub($amount, $size, $phone, $network);
  }

}