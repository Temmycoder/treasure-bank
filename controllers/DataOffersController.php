<?php

require_once "models/dataOffers.php";

class DataOffersController{
  private $data;

  public function __construct(){
    $this->data = new Data();
  }

  public function read(){
    return $this->data->read();
  }
}