<?php

include_once '../database/database.classes.php';
include_once '../classes/display-data.classes.php';
include_once '../controller/display-data.contr.php';

$display = new DisplayDeptContr;
$result = $display->fetchData();

if (!empty($result)) {
  if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $query = $_GET['search'];
    $result = $display->fetchSearchData($query);

    if (empty($result)) {
      exit;
    }
  }

  include_once '../templates/table/department-table.php';
  include_once '../templates/modal/view-dept-modal.php';
  include_once '../templates/modal/edit-dept-modal.php';
  include_once '../templates/modal/delete-dept-modal.php';
}
