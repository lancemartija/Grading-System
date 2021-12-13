<?php

class DisplayUsersContr extends DisplayUsers
{
  public function fetchUsers()
  {
    $result = $this->getUsers();
    return $result;
  }
}
