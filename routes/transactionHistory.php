<?php

require_once "controllers/TransferController.php";

$history = new TransferController();
$transHistory = $history->read();