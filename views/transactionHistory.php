<?php 
session_start(); 
require_once "routes/transactionHistory.php";
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

  <!-- [Favicon] icon -->
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

  <div class="pc-container bg-white">
    <div class="pc-content">
      <div class="card tbl-card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-borderless">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Amount</th>
                  <th>Account Number</th>
                  <th>Bank</th>
                  <th>Narration</th>
                  <th>Date/Time</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; foreach($transHistory as $h): $i++?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= number_format($h['amount'])?></td>
                    <td><?= $h['receiver_no']?></td>
                    <td><?= $h['receiver_bank']?></td>
                    <td><?= $h['message']?></td>
                    <td><?= $h['updated_at']?></td>
                  </tr>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <?php include "includes/js.php" ;?>

</body>
<!-- [Body] end -->

</html>