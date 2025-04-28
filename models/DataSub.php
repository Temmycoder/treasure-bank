<?php

require_once "config.php";
class DataSub{
  private $conn;
  private $table = '';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function newDataSub($amount, $size, $phone, $network){
    session_start();
    $user_id = $_SESSION['id'];
    $details = $this->conn->query("SELECT * FROM users_account WHERE user_id = '$user_id'"); 
    $fetch = $details->fetch_assoc();
    $curr_savings = $fetch['savings'];

    if($curr_savings <= $amount){
      return false;
    }else{
      $new_savings = $curr_savings - $amount;
      $insert = $this->conn->query("UPDATE users_account SET savings = '$new_savings' WHERE user_id = '$user_id'");

      // $insert = $this->conn->query("INSERT INTO $this->table(user_id, ) VALUES('$user_id', )");
      return $insert;
    }
  }
}