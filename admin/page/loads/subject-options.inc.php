<?php
class DisplayOptions extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblsubjects;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      echo "error";
      exit;
    } else {
      while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
        $result = $row;
      }

      $stmt = null;
      return $result;
    }

    $stmt = null;
    return $result;
  }
}

class DisplayOptionsContr extends DisplayOptions
{
  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }
}

$subjectOptions = new DisplayOptionsContr;
$options = $subjectOptions->fetchData();
