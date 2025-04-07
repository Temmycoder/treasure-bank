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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="assets/fonts/tabler-icons.min.css" >
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="assets/fonts/feather.css" >
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="assets/fonts/fontawesome.css" >
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="assets/fonts/material.css" >
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="assets/css/style.css" id="main-style-link" >
  <link rel="stylesheet" href="assets/css/style-preset.css" >
  <link rel="stylesheet" href="css/all.css" >

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

  <div class="pc-container bg-white"><br>
    <!-- [ Main Content ] start --><?=$msg;?>
    <div class="pc-content justify-center">
      <h2 class="text-center">New Transfer</h2>
      <form method="post" style="min-width: 500px;">
        <label for="bnfAcc">Enter Beneficiary Account Number:</label>
        <p><input type="text" name="bnfAcc" class="form-control" required autofocus></p>

        <label for="beneficiary">Select Beneficiary Bank Name:</label>
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

        <label for="transferAmount">Amount:</label>
        <p><input type="text" name="transferAmount" required class="form-control"></p>

        <label for="message">Message:</label>
        <p><textarea name="message" class="form-control"></textarea></p>
        <div class="text-center">
          <input type="submit" value="Submit" class="btn btn-warning px-5" required>
        </div>
      </form>
      <!-- <div class="row">
        [ sample-page ] start
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Current Balance</h6>
              <h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                    class="ti ti-trending-up"></i> </span></h4>
              <p class="mb-0 text-muted text-sm">You made <span class="text-primary">35,000</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total withdrawals</h6>
              <h4 class="mb-3">70,000 <span class="badge bg-light-success border border-success"><i
                    class="ti ti-trending-up"></i> </span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total Deposits</h6>
              <h4 class="mb-3">0 <span class="badge bg-light-warning border border-warning"><i
                    class="ti ti-trending-down"></i> </span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Loans balance</h6>
              <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                    class="ti ti-trending-down"></i> </span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year
              </p>
            </div>
          </div>
        </div>

      </div> -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/simplebar.min.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/fonts/custom-font.js"></script>
  <script src="assets/js/pcoded.js"></script>
  <script src="assets/js/plugins/feather.min.js"></script>
  <script src="js/all.js"></script>

</body>
<!-- [Body] end -->

</html>