<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $fname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
  $lname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $uid = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $pwd = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
  $type = filter_var($_POST['accounttype'], FILTER_SANITIZE_STRING);

  # Instantiate AddUserContr class
  include_once '../database/database.classes.php';
  include_once '../classes/users.classes.php';
  include_once '../controller/users.contr.php';
  $addUser = new AddUserContr($fname, $lname, $email, $uid, $pwd, $type);

  # Running error handlers and add user function
  $addUser->addUser();

  # Going to Users Page
  header('Location: ../view/users.php?success=useradded');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
  $fname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
  $lname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $uid = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $pwd = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
  $type = filter_var($_POST['accounttype'], FILTER_SANITIZE_STRING);

  # Instantiate AddUserContr class
  include_once '../database/database.classes.php';
  include_once '../classes/users.classes.php';
  include_once '../controller/users.contr.php';
  $addUser = new EditUserContr($id, $fname, $lname, $email, $uid, $pwd, $type);

  # Running error handlers and add user function
  $addUser->editUser();

  # Going to Users Page
  header('Location: ../view/users.php?success=useredited');
}


// if (isset($_POST['delete'])) {
//   # Grabbing data
//   $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

//   # Instantiate AddUserContr class
//   include_once '../classes/database.classes.php';
//   include_once '../classes/users.classes.php';
//   include_once '../controller/users.contr.php';
//   $addUser = new DeleteUserContr($id);

//   # Running error handlers and add user function
//   $addUser->deleteUser();

//   # Going to Users Page
//   header('Location: ../view/users.php?success=userdeleted');
// }
