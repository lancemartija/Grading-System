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

  include_once '../templates/table/' . $table . '-table.php';
  include_once '../templates/modal/view-' . $modal . '-modal.php';
  include_once '../templates/modal/edit-' . $modal . '-modal.php';
  include_once '../templates/modal/delete-' . $modal . '-modal.php';
}
