<?php 
require_once 'routes/dataOffers.php';
session_start(); 

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}
$msg = "";

if(isset($_GET['success'])){
  $msg = "<div class='alert alert-success'>Subscription successful</div>";
}
if(isset($_GET['error'])){
  $msg = "<div class='alert alert-danger'>Insufficient Balance</div>";
}

if(isset($_GET['plan'])){
  switch($_GET['plan']){
    case 'daily':;
      break;
    case 'weekly':;
      break;
    case 'monthly':;
      break;
    default: header('location: buyData');
  }
  $_SESSION['plan'] = $_GET['plan'];
}else{
  header('location: billPayments');
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

  <!-- [ Main Content ] start -->
  <div class="pc-container bg-white">
    <a href="buyData" class="btn btn-dark">BACK</a>
    <p><?=$msg?></p>
    <div class="pc-content">
      <h1 class="text-center"><?= ucwords($_GET['plan'])?> Plans</h1>
      <table class="table table-hover">
        <ul type="square">
          <?php 
            foreach($dataOffers as $d){
              if($d['tenor'] == $_GET['plan']){
                echo "
                <tr>
                  <td>
                    <h4>
                      $d[data_size] @ N$d[amount] 
                    </h4>
                  </td>
                  <td>
                    <a href='authDataSub?size=$d[data_size]&amount=$d[amount] ' class='btn btn-primary ms-5'>Buy</a>
                  </td>
                </tr>";
              }
            }
          ?>
        </ul>
      </table>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <?php include 'includes/js.php'?>

</body>
<!-- [Body] end -->

</html>