<?php
session_start();

if (!isset($_SESSION['name']) && !isset($_SESSION['studentid'])) {
  header('Location: ../../index.php');
  exit;
}

$page = 'Dashboard';
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student's Dashboard</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
</head>

<body class="h-full">
  <?php include_once '../templates/navbar.php'; ?>
  <main>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
        <a href="#">
          <div class="relative grid overflow-hidden duration-200 transform bg-green-600 rounded shadow-lg place-items-center hover:-translate-y-2 hover:shadow-2xl h-80">
            <img class="w-1/2" src="../../src/img/subjects.png" alt="" />
            <div class="absolute bottom-0 left-0 right-0 px-6 py-4 space-x-3 duration-200">
              <p class="text-2xl font-bold text-center text-gray-100">Subjects</p>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="relative grid overflow-hidden duration-200 transform bg-blue-600 rounded shadow-lg place-items-center hover:-translate-y-2 hover:shadow-2xl h-80">
            <img class="w-1/2" src="../../src/img/grades.png" alt="" />
            <div class="absolute bottom-0 left-0 right-0 px-6 py-4 space-x-3 duration-200">
              <p class="text-2xl font-bold text-center text-gray-100">Grades</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </main>

</body>

</html>