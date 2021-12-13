<?php

class DisplayUsers extends Dbh
{
  protected function getUsers()
  {
    $sql = 'SELECT * FROM tbluseraccounts';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      header('Location: ../view/users.php?error=stmtfailed');
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
