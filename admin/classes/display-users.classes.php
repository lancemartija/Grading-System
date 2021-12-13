<?php

class DisplayUsers extends Dbh
{
  protected function getUsers()
  {
    $sql = 'SELECT * FROM tbluseraccounts';
    $stmt = $this->connect()->query($sql);

    if (!$stmt) {
      $stmt = null;
      header('Location: ../view/users.php?error=stmtfailed');
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  // protected function checkUserCount()
  // {
  //   $sql = 'SELECT * FROM tbluseraccounts';
  //   $stmt = $this->connect()->query($sql);

  //   if (!$stmt) {
  //     $stmt = null;
  //     header('Location: ../view/users.php?error=stmtfailed');
  //     exit;
  //   }

  //   if ($stmt->rowCount() > 0) {
  //     return false;
  //   }

  //   return true;
  // }
}
