<?php 
session_start(); 

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}
error_reporting(1); 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $_SESSION['dataSize'] = $_POST['dataSize'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['network'] = $_POST['network'];
  header('location: PickDataPlan');
}
$msg = '';

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
      <div class="row">
        <div class="col-md-6 col-xl-4">
          <div class="card bg-warning">
            <div class="card-body">
              <h2 class="mb-3 text-white">Daily Plan</h2>
              <h5 class="mb-4 f-w-400 text-white">Buy Offers that last a day before expiree</h5>
              <p><a href="PickDataPlan?plan=daily" class="btn btn-light">Daily Plan</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="card bg-info">
            <div class="card-body">
              <h2 class="mb-3 text-white">Weekly Plan</h2>
              <h5 class="mb-4 f-w-400 text-white">Buy Offers that last a week before expiree</h5>
              <p><a href="PickDataPlan?plan=weekly" class="btn btn-light">Weekly Plan</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="card bg-primary">
            <div class="card-body">
              <h2 class="mb-3 text-white">Monthly Plan</h2>
              <h5 class="mb-4 f-w-400 text-white">Buy Offers that last a month before expiree</h5>
              <p><a href="PickDataPlan?plan=monthly" class="btn btn-light">Monthly Plan</a></p>
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