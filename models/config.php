<?php
  class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'treasure_bank_db';
    public $conn;

    public function get_connection(){
      $this->conn = null;
      try{
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
      }catch(Exception $e){
        die("Error connecting to server: " . $e->getMessage());
      }
      return $this->conn;
    }
  }
?>