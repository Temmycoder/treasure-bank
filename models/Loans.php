<?php

require_once "config.php";
class Loan{
  private $conn;
  private $table = 'loan_offers';
  public function __construct(){
    $database = new Database();
    $this->conn = $database->get_connection();
  }

  public function createLoan($package, $amount, $interest, $tenor_number, $tenor_unit){
    $select = $this->conn->query("SELECT id FROM loan_packages WHERE name = '$package'");
    $package_id = $select->fetch_assoc()['id'];
    $tenor = $tenor_number . " " . $tenor_unit;
    $query = $this->conn->query("INSERT INTO $this->table(amount, interest, tenor, package) 
    VALUES('$amount', '$interest', '$tenor', '$package_id')");
    return $query;
  }

  public function readLoans(){
    $query = $this->conn->query("SELECT $this->table.amount, $this->table.interest, $this->table.tenor, 
    loan_packages.name FROM $this->table JOIN loan_packages ON $this->table.package = loan_packages.id ORDER BY 
    $this->table.package");
    return $query;
  }
}