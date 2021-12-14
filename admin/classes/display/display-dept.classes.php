<?php

class DisplayDept extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tbldepartment;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      header('Location: ../view/deptartment.php?error=stmtfailed');
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbldepartment WHERE dept_id = ? OR dept_name = ? OR dept_desc = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
      $stmt = null;
      header('Location: ../view/deptartment.php?error=stmtfailed');
      exit;
    } else {
      if ($stmt->rowCount() == 0) {
        $stmt = null;
        return $result;
      } else {
        while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
          $result = $row;
        }
      }

      $stmt = null;
      return $result;
    }

    $stmt = null;
    return $result;
  }
}
