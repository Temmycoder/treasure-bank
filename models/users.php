<?php
require_once 'config.php';
class Users{
  private $conn;
  private $table = 'users_tbl';

  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function create($fname, $lname, $email, $code, $phone, $dob, $gender, $fa){
    $select = $this->conn->query("SELECT * FROM $this->table WHERE email = '$email'");
    $check = $select->num_rows;
    if($check > 0 ){
      return false;
    }else{
      $acc_off = "Damilare";
      $code_enc = password_hash($code, PASSWORD_DEFAULT);
      $firstName = ucfirst($fname);
      $lastName = ucfirst($lname);
      $sql = "INSERT INTO $this->table (first_name, last_name, email, password, phone, DOB, gender, account_officer, 2fa) 
      VALUES('$firstName', '$lastName', '$email', '$code_enc', '$phone', '$dob', '$gender', '$acc_off', '$fa')";
      return $this->conn->query($sql);
    }
  }

  public function update($id, $fname, $lname, $phone, $email){
    $firstName = ucfirst($fname);
    $lastName = ucfirst($lname);
    return $this->conn->query("UPDATE $this->table SET first_name = '$firstName', last_name = '$lastName',  
    phone = '$phone', email = '$email' WHERE id = '$id'");
  }

  public function delete($id){
    $delete = $this->conn->query("DELETE FROM $this->table WHERE id = '$id'");
    return $delete;
  }

  public function changeCode($id, $old, $new){
    $new_enc = password_hash($new, PASSWORD_DEFAULT);
    return $this->conn->query("UPDATE $this->table SET password = '$new_enc' WHERE password = '$old' AND id = '$id'");
  }
}