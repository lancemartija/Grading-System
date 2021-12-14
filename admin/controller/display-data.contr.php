<?php

class DisplayGradeLevelContr extends DisplayGradeLevel
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

class DisplayRoomsContr extends DisplayRooms
{
  private $query;

  public function fetchData()
  {
    $result = $this->getRooms();
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

  public function fetchData()
  {
    $result = $this->getUsers();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getUser($this->query);
    return $result;
  }
}
