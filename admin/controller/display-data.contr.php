<?php

class DisplayDeptContr extends DisplayDept
{
  private $query;

  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

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
