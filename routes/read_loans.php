<?php
require_once 'controllers/LoanController.php';
$loan = new LoanController();
$loans = $loan->readLoans();