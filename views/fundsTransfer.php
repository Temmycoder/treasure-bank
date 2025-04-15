<?php 
session_start(); 

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}
error_reporting(1); 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $_SESSION['bnfAcc'] = $_POST['bnfAcc'];
  $_SESSION['bnfBank'] = $_POST['bnfBank'];
  $_SESSION['message'] = $_POST['message'];
  $_SESSION['transferAmount'] = $_POST['transferAmount'];
  header('location: /treasurebank/authTransfer');
}
$msg = '';

if(isset($_GET['success'])){
  $msg = "<div class='alert alert-success'>Transfer was successful</div>";
}
if(isset($_GET['error'])){
  $msg = "<div class='alert alert-danger'>Insufficient Balance</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Tresure Bank App</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <?php include 'includes/css.php'?>

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<?php include "includes/sidebar.php" ;?>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<?php include "includes/header.php" ;?>

<!-- [ Header ] end -->

  <div class="pc-container bg-white"><br>
    <!-- [ Main Content ] start --><?=$msg;?>
    <div class="pc-content">
      <h2 class="">New Transfer</h2>
      <form method="post" style="max-width: 500px;">
        <label for="bnfAcc">Enter Beneficiary Account Number:</label>
        <p><input type="tel"  pattern="[0-9]{10}" name="bnfAcc" class="form-control" required autofocus></p>

        <label for="beneficiary">Select Beneficiary Bank Name:</label>
        <p>
          <select name="bnfBank" class="form-control" required>
            <option></option>
            <option value="Treasure">Treasure</option>
            <option value="FCMB">FCMB</option>
            <option value="wema">wema</option>
            <option value="gtb">gtb</option>
            <option value="uba">uba</option>
            <option value="opay">opay</option>
            <option value="palmpay">palmpay</option>
            <option value="access">access</option>
            <option value="diamond">diamond</option>
            <option value="crest">crest</option>
          </select>
        </p>

        <label for="transferAmount">Amount:</label>
        <p><input type="number" min="100" name="transferAmount" required class="form-control"></p>

        <label for="message">Narration:</label>
        <p><textarea name="message" class="form-control"></textarea></p>
        <div class="text-center">
          <input type="submit" value="Submit" class="btn btn-warning px-5" required>
        </div>
      </form>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <?php include 'includes/js.php'?>

</body>
<!-- [Body] end -->

</html>