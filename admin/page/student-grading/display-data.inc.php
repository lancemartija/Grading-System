<?php

$result = $display->fetchData();

if (!empty($result)) {
  if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $query = $_GET['search'];
    $result = $display->fetchSearchData($query);

    if (empty($result)) {
      exit;
    }
  }

  include_once 'student-grading-table.php';
  include_once '../page/student-grading/edit-grade-modal.php';
}
