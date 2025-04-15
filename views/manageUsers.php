<?php
require_once 'routes/read.php';
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
      <h2 class="mb-3 text-center">Users</h2>

      <div class="table-responsive">
        <table class="table table-hover table-borderless mb-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>DOB</th>
              <th>Acc Officer</th>
              <th>Joined</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 0; foreach($users as $u) : $i++?>
            <tr>
              <td><?=$i?></td>
              <td><?=$u['first_name']. " " .$u['last_name']?></td>
              <td><?=$u['phone']?></td>
              <td><?=$u['email']?></td>
              <td><?=$u['DOB']?></td>
              <td><?=$u['account_officer']?></td>
              <td><?=$u['time_created']?></td>
              <td><a href="editUsers?id=<?= $u['id']?>">Edit</a></td>
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
  <?php include 'includes/js.php'?>


</body>
<!-- [Body] end -->

</html>