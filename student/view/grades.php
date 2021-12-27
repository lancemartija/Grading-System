<?php
session_start();

if (!isset($_SESSION['student']) && !isset($_SESSION['studentid'])) {
  header('Location: ../../index.php');
  exit;
}

$page = 'Grades';
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student's Grades</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
</head>

<body class="h-full">
  <?php include_once '../templates/navbar.php'; ?>
  <main>
    <div class="px-8 py-6 mx-auto max-w-7xl">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="border-4 border-gray-200 border-dashed rounded-lg h-96"></div>
      </div>
      <!-- /End replace -->
    </div>
  </main>

</body>

</html>