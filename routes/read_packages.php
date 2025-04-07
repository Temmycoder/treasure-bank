<?php
require_once 'controllers/PackageController.php';
$package = new PackageController();
$packages = $package->read();