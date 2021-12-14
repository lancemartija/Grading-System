<?php

class DisplayUsersContr extends DisplayUsers
{
  private $query;

  public function fetchUsers()
  {
    $result = $this->getUsers();
    return $result;
  }

  public function fetchUser($query)
  {
    $this->query = $query;
    $result = $this->getUser($this->query);
    return $result;
  }
}
