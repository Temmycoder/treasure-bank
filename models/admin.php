<?php
require_once 'config.php';
class Admin{
  private $conn;
  private $table = 'users_tbl';

  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function read(){
    $sql = "SELECT * FROM $this->table WHERE role = 'user'";
    $result = $this->conn->query(query: $sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function readUser($id){
    $sql = "SELECT * FROM $this->table WHERE id = '$id'";
    $result = $this->conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function updateUsers($user_id, $fname, $lname, $phone, $officer, $email){
    $firstName = ucfirst($fname);
    $lastName = ucfirst($lname);
    $query = $this->conn->query("UPDATE $this->table SET first_name = '$firstName', last_name = '$lastName', 
    phone = '$phone', account_officer = '$officer', email = '$email' WHERE id = '$user_id'");
    if($query){
      return $query;
    }else{
      return false;
    }
  }
}