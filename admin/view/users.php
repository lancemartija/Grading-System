<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

$user = $_SESSION['useruid'];

include_once '../database/database.classes.php';
include_once '../classes/display-data.classes.php';
include_once '../controller/display-data.contr.php';

$display = new DisplayUsersContr;

$page = $table = $search = $link = $breadcrumb1 = 'users';
$btn = $modal = 'user';
$searchlink = 'users.php';
$breadcrumblink = '#';
$search .= ' (ID, Name, Username, Type)';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script async defer src="../../src/js/users-modal.js"></script>
</head>

<body>
  <?php include_once '../templates/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../templates/sidebar.php'; ?>
    <div id="main-content" class="relative w-full h-full ml-64 overflow-y-auto bg-gray-50">
      <main>
        <?php
        include_once '../templates/header.php';
        include_once '../page/users/add-user-modal.php';
        include_once '../includes/display-data.inc.php';
        ?>
      </main>
    </div>
  </div>
</body>

</html>