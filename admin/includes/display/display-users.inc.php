<?php

include_once '../database/database.classes.php';
include_once '../classes/display-data.classes.php';
include_once '../controller/display-data.contr.php';

$display = new DisplayUsersContr;
$result = $display->fetchUsers();

if (!empty($result)) {
  if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $query = $_GET['search'];
    $result = $display->fetchUser($query);

    if (empty($result)) {
      exit;
    }
  }

  include_once '../templates/table/users-table.php';
  include_once '../templates/modal/view-user-modal.php';
  include_once '../templates/modal/edit-user-modal.php';
  include_once '../templates/modal/delete-user-modal.php';
}
