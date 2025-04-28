<?php

require_once "config.php";
class TransactionPin{
  private $conn;
  private $table = 'users_account';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function setTransactionPin($pin){
    session_start();
    $user_id = $_SESSION['id'];
    $update = $this->conn->query("UPDATE $this->table SET transactionPin = '$pin' WHERE user_id = '$user_id'");
    return $update;
  }

  public function readPin(){
    session_start();
    $user_id = $_SESSION['id'];
    $read = $this->conn->query("SELECT transactionPin FROM $this->table WHERE user_id = '$user_id'");
    $fetch = $read->fetch_all(MYSQLI_ASSOC);
    return $read;
  }
}