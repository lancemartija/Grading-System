<?php
session_start();

if (!isset($_SESSION['student']) && !isset($_SESSION['studentid'])) {
  header('Location: ../../index.php');
  exit;
}

$studentnumber = $_SESSION['studentid'];

include_once '../database/database.classes.php';
include_once '../page/subjects/subjects.classes.php';

$page = 'Subjects';
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student's Subjects</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css?v=<?= time(); ?>">
</head>

<body class="h-full">
  <?php include_once '../templates/navbar.php'; ?>
  <main>
    <div class="px-8 py-6 mx-auto max-w-7xl">
      <?php include_once '../templates/tabs.php'; ?>
      <?php include_once '../page/subjects/display-data.inc.php'; ?>
    </div>
  </main>

</body>

</html>