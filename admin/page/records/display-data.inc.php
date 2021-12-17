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

  include_once '../page/' . $table . ' /' . $table . '-table.php';
  include_once '../page/' . $link . '/edit-' . $modal . '-modal.php';
  include_once '../page/' . $link . '/delete-' . $modal . '-modal.php';
}
