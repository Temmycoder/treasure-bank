<?php 
session_start(); 

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}
error_reporting(1); 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $_SESSION['amount'] = $_POST['amount'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['network'] = $_POST['network'];
  header('location: authRecharge');
}
$msg = '';

if(isset($_GET['success'])){
  $msg = "<div class='alert alert-success'>Recharge successful</div>";
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
      <!-- <div class="row">
        [ sample-page ] start
        <div class="col-md-6 col-xl-3">
          <div class="card bg-primary border border-primary">
            <div class="card-body">
              <h4 class="mb-3 text-white">100 MB</h4>
              <h6 class="mb-2 f-w-400 text-muted"></h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card bg-success border border-success">
            <div class="card-body">
              <h4 class="mb-3 text-white"></h4>
              <h6 class="mb-2 f-w-400 text-muted"></h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card bg-warning border border-warning">
            <div class="card-body">
              <h4 class="mb-3 text-white"></h4>
              <h6 class="mb-2 f-w-400 text-muted"></h6>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card bg-danger border border-danger">
            <div class="card-body">
              <h4 class="mb-3 text-white"></h4>
              <h6 class="mb-2 f-w-400 text-muted"></h6>
            </div>
          </div>
        </div>
      </div> -->
      <h2>Recharge Mobile Data</h2>
      <form method="post" style="max-width: 500px;">
        <label for="amount">Data Size:</label>
        <p>
          <select name="network" class="form-control" required>
            <option></option>
            <option value="100mb">100 MB</option>
            <option value="200mb">200 MB</option>
            <option value="500mb">500 MB</option>
            <option value="700mb">700 MB</option>
            <option value="1gb">1 GB</option>
            <option value="1.5gb">1.5 GB</option>
            <option value="2gb">2 GB</option>
            <option value="2.5gb">2.5 GB</option>
            <option value="5gb">5 GB</option>
            <option value="7gb">7 GB</option>
            <option value="10gb">10 GB</option>
            <option value="15gb">15 GB</option>
            <option value="20gb">20 GB</option>
            <option value="25gb">25 GB</option>
            <option value="30gb">30 GB</option>
          </select>
        </p>

        <label for="phone">Phone Number:</label>
        <p><input type="tel" name="phone" required class="form-control"></p>

        <label for="network">Network Provider:</label>
        <p>
          <select name="network" class="form-control" required>
            <option></option>
            <option value="mtn">MTN</option>
            <option value="airtel">Airtel</option>
            <option value="glo">GLO</option>
            <option value="etisalat">Etisalat</option>
            <option value="glo">9Mobile</option>
          </select>
        </p>

        <div class="text-center">
          <input type="submit" value="Submit" class="btn btn-warning px-4" required>
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