<?php

class DisplayClassContr extends DisplayClass
{
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

class DisplayClass extends Dbh
{
  protected function getData()
  {
    $stmt = $this->connect()->query('SELECT * FROM tblclass;');
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      echo "error";
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblclass WHERE class_code = ? OR class_name = ? OR class_inst = ? OR class_level = ? OR class_room = ? OR class_day = ? OR class_time = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query, $query, $query])) {
      $stmt = null;
      echo "error";
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      return $result;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }
}

$display = new DisplayClassContr();
$result = $display->fetchData();
