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
      header('Location: ../view/department.php?error=stmtfailed');
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
      header('Location: ../view/department.php?error=stmtfailed');
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

class DisplayRooms extends Dbh
{
  protected function getRooms()
  {
    $sql = 'SELECT * FROM tblrooms;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      header('Location: ../view/rooms.php?error=stmtfailed');
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblrooms WHERE room_id = ? OR room_name = ? OR room_desc = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
      $stmt = null;
      header('Location: ../view/rooms.php?error=stmtfailed');
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

class DisplayUsers extends Dbh
{
  protected function getUsers()
  {
    $sql = 'SELECT * FROM tbluseraccounts;';
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

  protected function getUser($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbluseraccounts WHERE account_id = ? OR account_firstname = ? OR account_lastname = ? OR account_email = ? OR account_username = ? OR account_type = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query, $query])) {
      $stmt = null;
      header('Location: ../view/users.php?error=stmtfailed');
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
