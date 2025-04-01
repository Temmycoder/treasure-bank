<?php
require_once 'config.php';
class Admin{
  private $conn;
  private $table = 'users_tbl';

  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function createUsers($fname, $lname, $email, $code, $phone, $dob, $gender, $officer, $fa){
    $select = $this->conn->query("SELECT * FROM $this->table WHERE email = '$email'");
    $check = $select->num_rows;
    if($check > 0 ){
      return false;
    }else{
      $code_enc = password_hash($code, PASSWORD_DEFAULT);
      $firstName = ucfirst($fname);
      $lastName = ucfirst($lname);
      $_officer = ucfirst($officer);
      $sql = "INSERT INTO $this->table (first_name, last_name, email, password, phone, DOB, gender, account_officer, 2fa) 
      VALUES('$firstName', '$lastName', '$email', '$code_enc', '$phone', '$dob', '$gender', '$_officer', '$fa')";
      return $this->conn->query($sql);
    }
  }

  public function createAdmins($fname, $lname, $email, $code, $phone, $dob, $gender, $fa){
    $select = $this->conn->query("SELECT * FROM $this->table WHERE email = '$email'");
    $check = $select->num_rows;
    if($check > 0 ){
      return false;
    }else{
      $code_enc = password_hash($code, PASSWORD_DEFAULT);
      $firstName = ucfirst($fname);
      $lastName = ucfirst($lname);
      $role = 'admin';
      $sql = "INSERT INTO $this->table (first_name, last_name, email, password, phone, DOB, gender, 2fa, role) 
      VALUES('$firstName', '$lastName', '$email', '$code_enc', '$phone', '$dob', '$gender', '$fa', '$role')";
      return $this->conn->query($sql);
    }
  }

  public function read(){
    $sql = "SELECT * FROM $this->table WHERE role = 'user'";
    $result = $this->conn->query(query: $sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function readUser($adminid){
    $sql = "SELECT * FROM $this->table WHERE id = '$adminid'";
    $result = $this->conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function readAdmins(){
    $sql = "SELECT * FROM $this->table WHERE role = 'admin'";
    $result = $this->conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function updateUsers($user_id, $fname, $lname, $phone, $officer, $email){
    $select = $this->conn->query("SELECT * FROM $this->table WHERE email = '$email'");
    $check = $select->num_rows;
    if($check > 0 ){
      return false;
    }else{
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

  public function updateAdmins($admin_id, $fname, $lname, $phone, $email){
    $select = $this->conn->query("SELECT * FROM $this->table WHERE email = '$email'");
    $check = $select->num_rows;
    if($check > 0 ){
      return false;
    }else{
      $firstName = ucfirst($fname);
      $lastName = ucfirst($lname);
      $query = $this->conn->query("UPDATE $this->table SET first_name = '$firstName', last_name = '$lastName', 
      phone = '$phone', email = '$email' WHERE id = '$admin_id'");
      if($query){
        return $query;
      }else{
        return false;
      }
    }
  }

  public function deactivateUsers($user_id){
    $query = $this->conn->query("UPDATE $this->table SET status = '0' WHERE id = '$user_id'");
    if($query){
      return $query;
    }else{
      return false;
    }
  }

  public function activateUsers($user_id){
    $query = $this->conn->query("UPDATE $this->table SET status = '1' WHERE id = '$user_id'");
    if($query){
      return $query;
    }else{
      return false;
    }
  }

}