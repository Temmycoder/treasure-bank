<?php 
session_start(); 
require_once "routes/transactionHistory.php";
if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}

$msg = '';

if(isset($_GET['success'])){
  $msg = "<div class='alert alert-success'>Beneficiary has been added</div>";
}

if(isset($_GET['error'])){
  $msg = "<div class='alert alert-danger'>Task was unsuccessful! Try Again Later</div>";
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

  <div class="pc-container bg-white">
    <div class="pc-content">
      <?=$msg?>
      <h3 class="my-4">Add A Beneficiary</h3>
      <form action="handleAddBeneficiary" method="post" style="max-width: 500px;">
        <label for="bnfAcc">Account Number</label>
        <p><input type="text" name="bnfAcc" class="form-control" autofocus required></p>

        <label for="bnfBank">Bank Name</label>
        <p>
          <select name="bnfBank" class="form-control" required>
            <option value=""></option>
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
        <input type="submit" class="btn btn-warning">
      </form>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <?php include 'includes/js.php'?>

</body>
<!-- [Body] end -->

</html>