<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

if (!isset($_GET['studentnumber'])) {
  header('Location: students.php');
  exit;
}

$user = $_SESSION['useruid'];

$syid = $_GET['id'];
$studentnumber = $_GET['studentnumber'];
$course = $_GET['course'];

include_once '../database/database.classes.php';
include_once '../page/subject-list/subject-list.classes.php';

$breadcrumb1 = 'students';
$breadcrumblink = 'students.php';
$breadcrumblink2 = 'records.php?studentnumber=' . $studentnumber;
$search = 'subjects (Subject Name, Instructor, Remarks)';
$breadcrumb2 = 'Enrollment Records';
$table = 'subject-list';
$modal = $btn = 'subject';
$searchlink = 'subject-list.php?id=' . $syid . '&studentnumber=' . $studentnumber . '&course=' . $course;
$page = $breadcrumb3 = 'Enrolled Subjects';
$i = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enrolled Subjects</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script async defer src="../../src/js/subject-list-modal.js"></script>
</head>

<body>
  <?php include_once '../templates/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../templates/sidebar.php'; ?>
    <div id="main-content" class="relative w-full h-full ml-64 overflow-y-auto bg-gray-50">
      <main>
        <?php
        include_once '../templates/header.php';
        include_once '../page/subject-list/assign-subject-modal.php';
        include_once '../page/subject-list/display-data.inc.php';
        ?>
      </main>
    </div>
  </div>
</body>

</html>