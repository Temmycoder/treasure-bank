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
    $insert = $this->conn->query("INSERT INTO $this->table(user_id, amount, receiver_no, receiver_bank, message) 
    VALUES('$user_id', '$amount', '$bnfAcc', '$bnfBank', '$message')");
    return $insert;
  }

  public function read(){
    $user_id = $_SESSION['id'];
    $sql = $this->conn->query("SELECT * FROM $this->table WHERE user_id = '$user_id'");
    $fetch = $sql->fetch_all(MYSQLI_ASSOC);
    return $fetch;
  }
}