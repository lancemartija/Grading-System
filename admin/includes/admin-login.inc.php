<?php
if (isset($_POST['submit'])) {
  # Grabbing data
  $uid = $_POST['username'];
  $pwd = $_POST['password'];

  # instatiate LoginController class
  include '../classes/database.class.php';
  include '../classes/admin-login.class.php';
  include '../controller/admin-login.contr.php';
  $login = new LoginContr($uid, $pwd);

  # Running error handlers and user login
  $login->loginUser();

  # Going to Admin Dashboard

  header('Location: ../view/dashboard.php');
}
print_r($_POST);
