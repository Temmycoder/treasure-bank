<?php

require_once "config.php";
class Data{
  private $conn;
  private $table = 'data_offers';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function read(){
    $query = $this->conn->query("SELECT * FROM $this->table");
    $fetch = $query->fetch_all(MYSQLI_ASSOC);
    return $fetch;
  }
}