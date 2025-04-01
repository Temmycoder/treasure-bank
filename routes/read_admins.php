<?php
require_once 'controllers/AdminController.php';
$admin = new AdminController();
$admins = $admin->readAdmins();