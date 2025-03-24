<?php
require_once 'models/users.php';
$user = new Users();

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $delete = $user->delete($id);
  header('Location: ');
}
?>