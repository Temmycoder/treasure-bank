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
      <h2>Recharge Airtime</h2>
      <form method="post" style="max-width: 500px;">
        <label for="amount">Amount: Minimun is 100 Naira</label>
        <p><input type="number" min="100" name="amount" required autofocus class="form-control"></p>

        <label for="phone">Phone Number:</label>
        <p><input type="tel" name="phone" pattern="[0-9]{11}" required class="form-control"></p>

        <label for="network">Network Provider:</label>
        <p>
          <select name="network" class="form-control" autocapitalize required>
            <option></option>
            <option value="mtn">MTN</option>
            <option value="airtel">Airtel</option>
            <option value="glo">GLO</option>
            <option value="etisalat">Etisalat</option>
            <option value="9mobile">9mobile</option>
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