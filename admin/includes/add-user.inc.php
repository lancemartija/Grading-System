<?php

if (isset($_POST['submit'])) {
  # Grabbing data
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $uid = $_POST['username'];
  $pwd = $_POST['password'];
  $type = $_POST['accounttype'];

  # Instantiate AddUserContr class
  include_once '../classes/database.classes.php';
  include_once '../classes/add-user.classes.php';
  include_once '../controller/add-user.contr.php';
  $addUser = new AddUserContr($fname, $lname, $email, $uid, $pwd, $type);

  # Running error handlers and add user function
  $addUser->addUser();

  # Going to Users Page
  header('Location: ../view/users.php');
}
