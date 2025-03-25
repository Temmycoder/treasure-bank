<?php
require_once 'controllers/AdminController.php';

$admin = new AdminController();
$users = $admin->read();