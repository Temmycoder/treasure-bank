<?php
require_once 'config.php';
class User{
  private $conn;
  private $table = 'users_tbl';

  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function login($email, $code){
    $sql = "SELECT * FROM $this->table WHERE email = '$email'";
    $query = $this->conn->query($sql);

    if($query->num_rows > 0){
      $result = $query->fetch_assoc();

      if(password_verify($code, $result['password'])){
        session_start();
        $_SESSION['id'] = $result['id'];
        $_SESSION['code'] = $code;
        $_SESSION['fname'] = $result['first_name'];
        $_SESSION['lname'] = $result['last_name'];
        return $result;
      }
    }else{
      return false;
    }
  }
}