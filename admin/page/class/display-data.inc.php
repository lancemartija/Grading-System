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

  include_once 'class-table.php';
  include_once 'view-class-modal.php';
  include_once 'edit-class-modal.php';
}
