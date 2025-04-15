<?php 
session_start(); 

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
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
    <!-- [ Main Content ] -->
    <div class="pc-content">
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6 col-xl-3">
          <div class="card bg-primary border border-primary">
            <div class="card-body">
              <h4 class="mb-3 text-white">Buy Airtime</h4>
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <a href="buyAirtime" class="btn btn-light mt-3">Visit</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card bg-success border border-success">
            <div class="card-body">
              <h4 class="mb-3 text-white">Buy Data</h4>
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <a href="buyData" class="btn btn-light mt-3">Visit</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card bg-warning border border-warning">
            <div class="card-body">
              <h4 class="mb-3 text-white">Tv Subscription</h4>
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <a href="" class="btn btn-light mt-3">Visit</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card bg-danger border border-danger">
            <div class="card-body">
            <h4 class="mb-3 text-white">Electricity Bill</h4>
            <h6 class="mb-2 f-w-400 text-muted"></h6>
            <a href="" class="btn btn-light mt-3">Visit</a>
              <p class="mb-0 text-muted text-sm">You owe <span class="">$20,395</span> this year
              </p>
            </div>
          </div>
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