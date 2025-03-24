<?php
session_start(); 
error_reporting(1); 

if(isset($_GET['error'])){
  $msg = "<div class='alert alert-danger'>Your email Address has already been used</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
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
  <div class="row container-lg mt-5">
    <div class="col-0 col-md-3 col-lg-3"></div>

    <div class="col-12 col-md-8 col-lg-8 bg-light">
      <span class="text-center"><h1 class="mb-4">Register</h1></span>
      <?php echo "$msg" ;?>
      <form method="post" class="container" action="/treasurebank/handleSignUp">
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
        <div class="row">
          <div class="col-6">
            <input type="submit" name="login" value="Submit" class="text-white btn btn-warning">
          </div>

          <div class="col-6">
            <a class="btn btn-secondary login" href="/treasurebank/index">Login to a registered account</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>