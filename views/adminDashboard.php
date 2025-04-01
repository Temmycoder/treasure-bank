<?php
session_start();
error_reporting(1);
if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}
$fname = $_SESSION['fname']; 
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
  <link rel="stylesheet" href="assets/css/all.css" >

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
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h3 class="m-b-10">Welcome, <?php echo "$fname"?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
              <h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary">
                <i class="ti ti-trending-up"></i> 10%</span></h4>
              <p class="mb-0 text-muted text-sm">You made <span class="text-primary">35,000</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
            <h6 class="mb-2 f-w-400 text-muted">Net Profit</h6>
              <h4 class="mb-3">
                70,000 
                <span class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i></span>
              </h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Saved Money</h6>
              <h4 class="mb-3">372,916,630.731</h4>
              <p class="mb-0 text-muted text-sm">You made extra <span class="text-warning">1,943</span> this year</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">Loans Unpaid</h6>
              <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                    class="ti ti-trending-down"></i> </span></h4>
              <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year
              </p>
            </div>
          </div>
        </div>

        
        <div class="col-md-12 col-xl-8">
          <h5 class="mb-3">Latest Accounts</h5>
          <div class="card tbl-card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-borderless mb-0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Account Number</th>
                      <th>Transactions</th>
                      <th class="text-end">Joined</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#" class="text-muted"></a></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xl-4">
          <h5 class="mb-3">Analytics Report</h5>
          <div class="card">
            <div class="list-group list-group-flush">
              <a href="#"
                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                Finance Growth<span class="h5 mb-0">+45.14%</span></a>
              <a href="#"
                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                Expenses Ratio<span class="h5 mb-0">0.58%</span></a>
              <a href="#"
                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Business
                Risk Cases<span class="h5 mb-0">Low</span></a>
            </div>
            <div class="card-body px-2">
              <div id="analytics-report-chart"></div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-xl-8">
          <h5 class="mb-3">History</h5>
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
              <h3 class="mb-0">$7,650</h3>
              <div id="sales-report-chart"></div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xl-4">
          <h5 class="mb-3">Transaction History</h5>
          <div class="card">
            <div class="list-group list-group-flush">
              
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                      <i class="ti ti-settings f-18"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Order #988784</h6>
                    <p class="mb-0 text-muted">7 hours ago</P>
                  </div>
                  <div class="flex-shrink-0 text-end">
                    <h6 class="mb-1">- $682</h6>
                    <p class="mb-0 text-muted">16%</P>
                  </div>
                </div>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <script src="assets/js/plugins/apexcharts.min.js"></script>
  <script src="assets/js/pages/dashboard-default.js"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/simplebar.min.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/fonts/custom-font.js"></script>
  <script src="assets/js/pcoded.js"></script>
  <script src="assets/js/plugins/feather.min.js"></script>
  <script src="assets/js/plugins/all.js"></script>

</body>
<!-- [Body] end -->

</html>