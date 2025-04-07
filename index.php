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
elseif($url[0] == 'handleUserStatus'){
  require_once 'routes/User_status.php';
}
elseif($url[0] == 'addUsers'){
  require_once 'views/addUsers.php';
}
elseif($url[0] == 'handleAddUser'){
  require_once 'routes/Add_users.php';
}
elseif($url[0] == 'addAdmins'){
  require_once 'views/addAdmins.php';
}
elseif($url[0] == 'handleAddAdmins'){
  require_once 'routes/Add_admins.php';
}
elseif($url[0] == 'manageAdmins'){
  require_once 'views/manageAdmins.php';
}
elseif($url[0] == 'editAdmins'){
  require_once 'views/editAdmins.php';
}
elseif($url[0] == 'handleEditAdmins'){
  require_once 'routes/Edit_admins.php';
}
elseif($url[0] == 'fees'){
  require_once 'views/fees.php';
}
elseif($url[0] == 'loans'){
  require_once 'views/loans.php';
}
elseif($url[0] == 'addLoanOffer'){
  require_once 'views/addLoanOffer.php';
}
elseif($url[0] == 'handleAddLoan'){
  require_once 'routes/Add_loan.php';
}
elseif($url[0] == 'changeTransactionFee'){
  require_once 'routes/changeTransactionFee.php';
}
elseif($url[0] == 'changeSavingsFee'){
  require_once 'routes/changeSavingsFee.php';
}
elseif($url[0] == 'fundsTransfer'){
  require_once 'views/fundsTransfer.php';
}
elseif($url[0] == 'authTransfer'){
  require_once 'views/authTransfer.php';
}
elseif($url[0] == 'handleFundsTransfer'){
  require_once 'routes/fundsTransfer.php';
}
elseif($url[0] == 'transactionHistory'){
  require_once 'views/transactionHistory.php';
}
elseif($url[0] == 'beneficiaries'){
  require_once 'views/beneficiaries.php';
}
elseif($url[0] == ''){
  require_once 'routes/.php';
}
elseif($url[0] == ''){
  require_once 'routes/.php';
}
elseif($url[0] == ''){
  require_once 'routes/.php';
}
elseif($url[0] == ''){
  require_once 'routes/.php';
}
elseif($url[0] == ''){
  require_once 'routes/.php';
}
elseif($url[0] == ''){
  require_once 'routes/.php';
}
elseif($url[0] == ''){
  require_once 'routes/.php';
}
else{
  echo "<h1>404 error: Page not found</h1>";
}