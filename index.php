<?php

$url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')): [];

if(empty($url)||$url[0] == 'index'){
  require_once 'views/index.php';
}
elseif($url[0] == 'signup'){
  require_once 'views/signup.php';
}
elseif($url[0] == 'handleLogin'){
  require_once 'routes/login.php';
}
elseif($url[0] == 'handleSignUp'){
  require_once 'routes/sign_up.php';
}
elseif($url[0] == 'edit_profile'){
  require_once 'views/edit_profile.php';
}
elseif($url[0] == 'handleEditProfile'){
  require_once 'routes/Edit_profile.php';
}
elseif($url[0] == 'logout'){
  require_once 'views/logout.php';
}
elseif($url[0] == 'dashboard'){
  require_once 'views/dashboard.php';
}
elseif($url[0] == 'change_password'){
  require_once 'views/change_password.php';
}
elseif($url[0] == 'handleChangeCode'){
  require_once 'routes/Change_code.php';
}
elseif($url[0] == 'account_details'){
  require_once 'views/account_details.php';
}
elseif($url[0] == 'reset_password'){
  require_once 'views/reset_password.php';
}
elseif($url[0] == 'handleResetPassword'){
  require_once 'routes/Reset_password.php';
}
elseif($url[0] == 'adminSignup'){
  require_once 'views/adminSignup.php';
}
elseif($url[0] == 'adminDashboard'){
  require_once 'views/adminDashboard.php';
}
elseif($url[0] == 'manageUsers'){
  require_once 'views/manageUsers.php';
}
elseif($url[0] == 'editUsers'){
  require_once 'views/editUsers.php';
}
elseif($url[0] == 'handleEditUsers'){
  require_once 'routes/Edit_users.php';
}
else{
  echo "<h1 class='alert alert danger'>404 error: Page not found</h1>";
}