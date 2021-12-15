<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
  $gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $empstatus = filter_var(trim($_POST['empstatus']), FILTER_SANITIZE_STRING);

  # Instantiate AddFacultyContr class
  include_once '../database/database.classes.php';
  include_once '../classes/faculty.classes.php';
  include_once '../controller/faculty.contr.php';
  $addFaculty = new AddFacultyContr($code, $name, $address, $gender, $status, $email, $empstatus);

  # Running error handlers and add faculty function
  $addFaculty->addFaculty();

  # Going to Faculty Page
  header('Location: ../view/faculty.php?success=facultyadded');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
  $gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $empstatus = filter_var(trim($_POST['empstatus']), FILTER_SANITIZE_STRING);

  # Instantiate AddFacultyContr class
  include_once '../database/database.classes.php';
  include_once '../classes/faculty.classes.php';
  include_once '../controller/faculty.contr.php';
  $editFaculty = new EditFacultyContr($id, $code, $name, $address, $gender, $status, $email, $empstatus);

  # Running error handlers and add faculty function
  $editFaculty->editFaculty();

  # Going to Faculty Page
  header('Location: ../view/faculty.php?success=facultyedited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddFacultyContr class
  include_once '../database/database.classes.php';
  include_once '../classes/faculty.classes.php';
  include_once '../controller/faculty.contr.php';
  $deleteFaculty = new DeleteFacultyContr($id);

  # Running error handlers and add faculty function
  $deleteFaculty->deleteFaculty();

  # Going to Faculty Page
  header('Location: ../view/faculty.php?success=facultydeleted');
}
