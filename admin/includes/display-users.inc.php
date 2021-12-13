<?php

include_once '../classes/database.classes.php';
include_once '../classes/display-users.classes.php';
include_once '../controller/display-users.contr.php';

$display = new DisplayUsersContr;
$result = $display->fetchUsers();

if (!empty($result)) {
  include_once '../templates/user-table.php';
  include_once '../templates/edit-user-modal.php';
}
