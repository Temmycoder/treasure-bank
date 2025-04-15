<?php

require_once 'controllers/AccountController.php';
$account = new AccountController();
$acc = $account->read();