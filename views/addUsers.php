<?php 
session_start();
error_reporting(1);

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
      <h2 class="mb-3">New User</h2>
      <?php echo $msg;?>
      <div class="col-lg-6">
        <form method="post" class="container" action="/treasurebank/handleAddUser ">
          <label>First Name:</label><br>
          <input type="text" name="fname" id="fname" class="form-control" required autofocus><br>
  
          <label>Last Name:</label><br>
          <input type="text" name="lname" id="lname" class="form-control" required><br>
  
          <label>Phone Number:</label><br>
          <input type="tel" name="phone" id="phone" class="form-control" required><br>
  
          <label>E-mail Address:</label><br>
          <input type="email" name="email" id="email" class="form-control" required><br>
  
          <label>Password:</label><br>
          <input type="password" name="code" id="code" class="form-control" required><br>
  
          <div class="row mb-5">
            <div class="col-md-6">
              <label>Gender:</label>
              <select name="gender" id="" class="form-control" required>
                <option value="female"></option>
                <option value="female">Female</option>
                <option value="male">Male</option>
              </select>
            </div>
          
            <div class="col-md-6">
              <label>DOB:</label><br>
              <input type="date" name="dob" id="dob" class="form-control" required>
            </div>
          </div>

          <label>Account Officer:</label><br>
          <input type="text" name="officer" id="officer" class="form-control" required><br>

          <input type="submit" value="Submit" class="text-white btn btn-warning">
        </form>
      </div>
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