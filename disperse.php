<?php
// require_once 'controllers/AuthController.php';
// require_once 'controllers/UsersController.php';

// $url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')): [];

// $control = new UsersController();
// $auth = new AuthController();

// if(empty($url)||$url[0] == 'index'){
//   $control->index();
// }
// elseif($url[0] == 'signup'){
//   $control->signUp();
  
// }
// elseif($url[0] == 'sign_up'){
//   $control->signUp();
// }
// elseif($url[0] == 'handleLogin'){
//   $auth->handleLogin();
// }
// elseif($url[0] == 'changeCode'){
//   $control->changeCode();
// }
// elseif($url[0] == 'handleChangeCode'){
//   header("Location: /routes/Change_code.php");
// }
// elseif($url[0] == 'forgotCode'){
//   $control->forgotCode();
// }
// elseif($url[0] == 'handleForgotCode'){
//   header("Location: /routes/reset_code");
// }
// elseif($url[0] == 'handleOtpReset'){
//   header("Location: /routes/sign_up");
// }
// else{
//   echo"404 error: Page not found";
// }