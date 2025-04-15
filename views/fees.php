<?php 
require_once 'routes/read_user.php';

session_start();
error_reporting(1);
$_SESSION['user_id'] = $_GET['id'];

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}

$msg = "";
if(isset($_GET['error'])){
  $msg = "<div class='alert alert-danger'>An Error occured! Try again later</div>";
}

if(isset($_GET['success'])){
  $msg = "<div class='alert alert-success'>Profile info was successfully changed</div>";
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
<?php include "includes/adminSidebar.php" ;?>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<?php include "includes/header.php" ;?>
<!-- [ Header ] end -->

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <h2 class="mb-5 text-center">Apply New Fees</h2>
      <div class="row">
        <div class="col-6">
          <form method="post" action="changeTransactionFee">
            <label for="transaction"><h3>Transaction Fee:</h3></label>
            <div class="col-lg-3">
              <input type="number"% value="5" class="form-control"><br>
              <input type="submit" class="text-white btn btn-warning">
            </div>
          </form>
        </div>
        <div class="col-6">
          <form method="post" action="changeSavingsFee">
            <label for="savings"><h3>Savings Fee:</h3></label>
            <div class="col-lg-3">
              <input type="number" value="5" class="form-control"><br>
              <input type="submit" class="text-white btn btn-warning">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->

  <?php include "includes/footer.php" ;?>

  <?php include 'includes/js.php'?>


</body>
<!-- [Body] end -->

</html>