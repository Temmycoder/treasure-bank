<?php 
session_start(); 

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}

$bnfAcc = $_SESSION['bnfAcc'];
$transferAmount = $_SESSION['transferAmount'];
if(!isset($bnfAcc) && !isset($transferAmount)){
  header("location: fundsTransfer");
}

$msg = "";

if(isset($_GET['error'])){
  $msg = "<div class='alert alert-danger'>Password is incorrect</div>";
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
    <a href="fundsTransfer" class="btn btn-dark">BACK</a>
    <p><?=$msg?></p>
    <div class="pc-content justify-center">
      <h2 class="my-5 text-center">Enter Transaction Pin</h2>
      <h4>Confirm transaction of <?php echo number_format($transferAmount);?> to <?=$bnfAcc?></h4>
      <form action="handleFundsTransfer" method="post" class="col-lg-5 col-md-6 col-12">
        <label for="password">Pin:</label>
        <p><input type="password" name="password" placeholder="* * * * * *" class="form-control" required></p>

        <input type="submit" value="Transfer" class="btn btn-warning">
      </form>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <?php include "includes/footer.php" ;?>

  <?php include 'includes/js.php'?>

</body>
<!-- [Body] end -->

</html>