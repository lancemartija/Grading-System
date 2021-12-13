<?php

if (isset($_POST['submit'])) {
  # Grabbing data
  $fname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
  $lname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $uid = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $pwd = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
  $type = filter_var($_POST['accounttype'], FILTER_SANITIZE_STRING);

  # Instantiate AddUserContr class
  include_once '../classes/database.classes.php';
  include_once '../classes/add-user.classes.php';
  include_once '../controller/add-user.contr.php';
  $addUser = new AddUserContr($fname, $lname, $email, $uid, $pwd, $type);

  # Running error handlers and add user function
  $addUser->addUser();

  # Going to Users Page
  header('Location: ../view/users.php?success=useradded');
}
