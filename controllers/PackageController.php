<?php

require_once "models/Loanpackages.php";

class PackageController{
  private $package;

  public function __construct(){
    $this->package = new Package();
  }

  public function read(){
    return $this->package->read();
  }
}