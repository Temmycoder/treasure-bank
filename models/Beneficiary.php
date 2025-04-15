<?php

require_once "config.php";
class Beneficiary{
  private $conn;
  private $table = 'beneficiaries';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function addBeneficiary($bnfAcc, $bnfBank){
    $select = $this->conn->query("SELECT * FROM $this->table WHERE account_no = '$bnfAcc' AND bank = '$bnfBank'");
    session_start();
      $user_id = $_SESSION['id'];
      $query = $this->conn->query("INSERT INTO $this->table(user_id, account_no, bank) 
      VALUES('$user_id', $bnfAcc', '$bnfBank')");
      return $query;
    
  }
}