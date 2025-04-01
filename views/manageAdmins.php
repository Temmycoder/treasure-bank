<?php
require_once 'routes/read_admins.php';
session_start(); 

if(!isset($_SESSION['id'])){
  header("location: /treasurebank/index");
}
error_reporting(1); 
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
      <h2 class="mb-3 text-center">Admins</h2>

      <div class="table-responsive">
        <table class="table table-hover table-borderless mb-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>DOB</th>
              <th>Joined</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 0; foreach($admins as $u) : $i++?>
            <tr>
              <td><?=$i?></td>
              <td><?=$u['first_name']. " " .$u['last_name']?></td>
              <td><?=$u['phone']?></td>
              <td><?=$u['email']?></td>
              <td><?=$u['DOB']?></td>
              <td><?=$u['time_created']?></td>
              <td><a href="editAdmins?adminid=<?= $u['id']?>">Edit</a></td>
              <td>
                <a href="handleUserStatus?id=<?= $u['id']?>&status=<?= $u['status']?>&role=<?= $u['role']?>">
                  <?= ($u['status'] === '0')  ? 'Activate': 'Deactivate'; ?>
                </a>
              </td>
            </tr>
          <?php endforeach ;?>
          </tbody>
        </table>
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