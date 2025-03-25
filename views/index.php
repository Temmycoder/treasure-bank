<?php 
session_start();
error_reporting(1);
$msg = "";
if(isset($_GET['error'])){
  $msg = "<div class='alert alert-danger'>Invalid Login Details</div>";
}
if(isset($_GET['success'])){
  $msg = "<div class='alert alert-success'>Your account has been created, you can now Login.</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogIn</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<style>
  body{
    background-image: url('img/loginbg.png');
    background-attachment: fixed;
    background-position: -250px -10px;
    padding-bottom: 70px;
  }

  .bg-light{
    border-radius: 10px;
    padding: 40px;
  }

  .link{
    text-decoration: none;
    color: orange;
  }

  input[type="submit"], .login{
    width: 100%;
    font-size: large;
  }
</style>

<body>
  <div class="row container-fluid mt-5 pt-5">
    <div class="col-1 col-md-3 col-lg-4"></div>

    <div class="col-11 col-md-7 col-lg-5 bg-light pb-5 pt-5">
      <span class="text-center"><h1 class="mb-5">Login</h1></span>
      <?php echo $msg; ?>
      <form method="post" autocomplete="off" action="/treasurebank/handleLogin">

        <label for="email">E-mail Address:</label><br>
        <input type="email" name="email" id="email" class="form-control" required autofocus><br>

        <label for="code">Password:</label><br>
        <input type="password" name="code" id="code" class="form-control" required><br>

        <div class="row mb-5">
          <div class="col-auto col-lg-auto">
            <a href="/treasurebank/signup" class="nav-link">Don't have an account? Sign Up</a>
          </div>

          <div class="col-auto col-lg-2"></div>

          <div class="col-auto col-lg-auto">
            <a href="/treasurebank/reset_password" class="nav-lnk">Forgot Password?</a>
          </div>
        </div>

        <div class="row">
          <div class="col-auto col-lg-4"></div>
          <div class="col-12 col-lg-4">
            <input type="submit" name="login" value="Login" class="text-white btn btn-warning">
          </div>
          <div class="col-auto col-lg-4"></div>
        </div>

      </form>
    </div>

    <div class="col-auto col-md-auto col-lg-3"></div>
  </div>

</body>
</html>