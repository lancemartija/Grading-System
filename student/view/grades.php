<?php
session_start();

if (!isset($_SESSION['student']) && !isset($_SESSION['studentid'])) {
  header('Location: ../../index.php');
  exit;
}

$studentnumber = $_SESSION['studentid'];

include_once '../database/database.classes.php';
include_once '../page/grades/grades.classes.php';

$page = 'Grades';
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student's Grades</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css?v=<?= time(); ?>">
</head>

<body class="h-full">
  <?php include_once '../templates/navbar.php'; ?>
  <main>
    <div class="px-8 py-6 mx-auto max-w-7xl">
      <nav>
        <form method="get">
          <ul class="flex flex-wrap border-b border-gray-200">
            <li class="mr-2">
              <button type="submit" name="" value="" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg <?= (!isset($_GET['course'])) ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">All Courses</button>
            </li>
            <li class="mr-2">
              <button type="submit" name="course" value="Grade 12" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg <?= (isset($_GET['course']) && $_GET['course'] == 'Grade 12') ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">Grade 12</button>
            </li>
            <li class="mr-2">
              <button type="submit" name="course" value="Grade 11" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg <?= (isset($_GET['course']) && $_GET['course'] == 'Grade 11') ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">Grade 11</button>
            </li>
            <li class="mr-2">
              <button type="submit" name="course" value="Grade 10" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg  <?= (isset($_GET['course']) && $_GET['course'] == 'Grade 10') ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">Grade 10</button>
            </li>
            <li class="mr-2">
              <button type="submit" name="course" value="Grade 9" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg <?= (isset($_GET['course']) && $_GET['course'] == 'Grade 9') ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">Grade 9</button>
            </li>
            <li class="mr-2">
              <button type="submit" name="course" value="Grade 8" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg <?= (isset($_GET['course']) && $_GET['course'] == 'Grade 8') ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">Grade 8</button>
            </li>
            <li>
              <button type="submit" name="course" value="Grade 7" class="inline-block px-4 py-4 text-sm font-medium text-center rounded-t-lg <?= (isset($_GET['course']) && $_GET['course'] == 'Grade 7') ? 'bg-gray-200 text-gray-600' : 'hover:text-gray-600 hover:bg-gray-200 text-gray-400'; ?>">Grade 7</button>
            </li>
          </ul>
        </form>
      </nav>
      <?php include_once '../page/grades/display-data.inc.php'; ?>
    </div>
  </main>

</body>

</html>