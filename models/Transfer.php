<?php

require_once "config.php";
class Transfer{
  private $conn;
  private $table = 'fund_transfers';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function newTransfer($amount, $bnfAcc, $bnfBank, $message){
    session_start();
    $user_id = $_SESSION['id'];

    $details = $this->conn->query("SELECT * FROM users_account WHERE user_id = '$user_id'"); 
    $fetch = $details->fetch_assoc();
    $curr_savings = $fetch['savings'];

    $fee_query = $this->conn->query("SELECT rate FROM fees WHERE type = 'transaction'"); 
    $fee = $fee_query->fetch_assoc();
    $rate = $fee['rate'];

    if($curr_savings <= ($amount + $rate)){
      return false;
    }else{
      $new_savings = $curr_savings - $amount - (($rate / 100) * $amount);
      $this->conn->query("UPDATE users_account SET savings = '$new_savings' WHERE user_id = '$user_id'");

      $bnf_details = $this->conn->query("SELECT * FROM users_account WHERE account_no = '$bnfAcc'");
      $bnf_fetch = $bnf_details->fetch_assoc();
      $bnf_savings = $bnf_fetch['savings'];
      $new_bnf_savings = $bnf_savings + $amount;
      $this->conn->query("UPDATE users_account SET savings = '$new_bnf_savings' WHERE account_no = '$bnfAcc'");

      $insert = $this->conn->query("INSERT INTO $this->table(user_id, amount, receiver_no, receiver_bank, 
      message) VALUES('$user_id', '$amount', '$bnfAcc', '$bnfBank', '$message')");
      return $insert;
    }
  }

  public function read(){
    $user_id = $_SESSION['id'];
    $sql = $this->conn->query("SELECT * FROM $this->table WHERE user_id = '$user_id'");
    $fetch = $sql->fetch_all(MYSQLI_ASSOC);
    return $fetch;
  }
}