<?php 

session_start(); 
error_reporting(1); 

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

  <!-- [Favicon] icon -->
  <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
  <?php include 'includes/css.php'?>
  <style>
    .justify-center{
      justify-items: center;
    }
  </style>
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

  <!-- [ Main Content ] start -->
  <div class="pc-container bg-white">
    <?php echo $msg;?>
    <div class="pc-content justify-center">
      <div class="page-header mt-5 mb-3">
        <div class="page-block">
          <div class="page-header-title">
            <h2>Set a Pin for transactions</h2>
          </div>
        </div>
      </div>
      <form method="post" action="handleTransactionPin" class="col-lg-5 col-md-6 col-12">
        <h3><label for="pin">Pin:</label></h3>
        <h5 class="text-danger ">*Six characters required*</h5>
        <h5 class="text-danger">*Only Numbers allowed*</h5>
        <input type="password" pattern="[0-9]{6}" name="pin" class="form-control" required autofocus><br>

        <input type="submit" name="submit" id="submit" class="btn btn-warning">
      </form>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <?php include 'includes/js.php'?>

</body>
<!-- [Body] end -->

</html>