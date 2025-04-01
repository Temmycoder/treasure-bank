<?php
session_start();
require_once 'controllers/AdminController.php';

error_reporting(1);
$admin = new AdminController();
$adminid = $_SESSION['adminid'];
$user = $admin->readUser($adminid);