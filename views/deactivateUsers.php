<?php

require_once "routes/deactivate.php";

if(isset($_GET['id'])){
  $user_id = $_GET['id'];
}