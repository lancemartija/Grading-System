<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

if (!isset($_GET['code'])) {
  header('Location: faculty.php');
  exit;
}

$user = $_SESSION['useruid'];
$instructor = $_GET['code'];

include_once '../database/database.classes.php';
include_once '../page/loads/loads.classes.php';

$table = $search = 'loads';
$breadcrumb1 = 'faculties';
$page = $breadcrumb2 = 'List of Loads';
$breadcrumblink = 'faculty.php';
$modal = 'load';
$btn = 'subject';
$searchlink = 'loads.php?code=' . $_GET['code'];
$i = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty</title>
  <link rel="stylesheet" href="../../app/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script async defer src="../../app/js/loads-modal.js"></script>
</head>

<body>
  <?php include_once '../templates/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../templates/sidebar.php'; ?>
    <div id="main-content" class="relative w-full h-full ml-64 overflow-y-auto bg-gray-50">
      <main>
        <?php
        include_once '../templates/header.php';
        include_once '../page/loads/assign-load-modal.php';
        include_once '../page/loads/loads-table.php';
        ?>
      </main>
    </div>
  </div>
</body>

</html>