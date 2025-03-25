<?php
require_once 'controllers/AdminController.php';
session_start();
error_reporting(1);
$admin = new AdminController();
$id = $_SESSION['user_id'];
$user = $admin->readUser($id);