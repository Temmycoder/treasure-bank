<?php

require_once "config.php";
class Package{
  private $conn;
  private $table = 'loan_packages';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function read(){
    $query = $this->conn->query("SELECT * FROM $this->table");
    return $query;
  }
}