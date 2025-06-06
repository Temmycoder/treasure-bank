<?php 
require_once 'routes/read_loans.php';

session_start();
error_reporting(1);
$_SESSION['user_id'] = $_GET['id'];

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
<?php include "includes/adminSidebar.php" ;?>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<?php include "includes/header.php" ;?>
<!-- [ Header ] end -->

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <h3><a href="addLoanOffer">Add a new loan offer</a></h3>
      <h1 class="text-center mb-4">LOANS</h1>
      <div class="row">
        <!-- [ sample-page ] start -->
         <?php foreach($loans as $loan): ?>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h5 class="text-muted"><?=$loan['name']?></h5>
              <h4 class="mb-3"><?= $loan['amount'] ?> <span class="badge bg-light-primary border border-primary">
                +<?=$loan['interest']?>%</span>
              </h4>
              <h5 class="f-w-400 text-muted">Tenor: <?=$loan['tenor']?></h5>
              <a href="">Remove</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">15,000
                <span class="badge bg-light-warning border border-warning">+10%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">20,000 
                <span class="badge bg-light-danger border border-danger">+10%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">25,000 <span class="badge bg-light-primary border border-primary">
                +10%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">30,000 
                <span class="badge bg-light-success border border-success">+10%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">35,000
                <span class="badge bg-light-warning border border-warning">+10%</span>
              </h4>
              <a href="">Remove</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">40,000 
                <span class="badge bg-light-danger border border-danger">+10%</span>
              </h4>
              <a href="">Remove</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">50,000 <span class="badge bg-light-primary border border-primary">
                +15%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">55,000 
                <span class="badge bg-light-success border border-success">+15%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">60,000
                <span class="badge bg-light-warning border border-warning">+15%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">65,000 
                <span class="badge bg-light-danger border border-danger">+15%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">65,000 <span class="badge bg-light-primary border border-primary">
                +15%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">70,000 
                <span class="badge bg-light-success border border-success">+15%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">75,000
                <span class="badge bg-light-warning border border-warning">+15%</span>
              </h4>
              <a href="">Remove</a>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-2 f-w-400 text-muted"></h6>
              <h4 class="mb-3">80,000 
                <span class="badge bg-light-danger border border-danger">+15%</span>
              </h4>
              <a href="">Remove</a>

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