<?php

class DisplayUsersContr extends DisplayUsers
{
  public function fetchUsers()
  {
    // if ($this->checkUserCount() == false) {
    //   header("Location: ../view/users.php?error=userempty");
    //   exit;
    // }

    $result = $this->getUsers();

    return $result;
  }
}
