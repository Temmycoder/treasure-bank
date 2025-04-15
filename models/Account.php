<?php

require_once "config.php";
class Account{
  private $conn;
  private $table = 'users_account';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }
  // public function create(){
  //   $user_id = $_SESSION['id'];
  //   $sql = $this->conn->query("INSERT INTO $this->table (user_id, account_no, savings) VALUES('$user_id', '$account_no', '0')");
  //   return $sql;
  // }
  public function read(){
    $user_id = $_SESSION['id'];
    $sql = $this->conn->query("SELECT * FROM $this->table WHERE user_id = '$user_id'");
    return $sql;
  }
}