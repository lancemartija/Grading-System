<?php

class DisplaySubjects extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblsubjects;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      header('Location: ../view/subjects.php?error=stmtfailed');
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects WHERE subj_id = ? OR subj_code = ? OR subj_name = ? OR subj_ay = ? OR subj_sem = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query])) {
      $stmt = null;
      header('Location: ../view/subjects.php?error=stmtfailed');
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

class DisplayGradeLevel extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblcourse;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      header('Location: ../view/grade-level.php?error=stmtfailed');
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblcourse WHERE course_id = ? OR course_code = ? OR course_name = ? OR course_level = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query])) {
      $stmt = null;
      header('Location: ../view/grade-level.php?error=stmtfailed');
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

class DisplayFaculty extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblinstructor;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      header('Location: ../view/faculty.php?error=stmtfailed');
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblinstructor WHERE inst_code = ? OR inst_name = ? OR inst_gender = ? OR inst_status = ? OR inst_email = ? OR inst_empstatus = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query, $query])) {
      $stmt = null;
      header('Location: ../view/faculty.php?error=stmtfailed');
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
    $stmt = $this->connect()->prepare('SELECT * FROM tbldepartment WHERE dept_id = ? OR dept_code = ? OR dept_name = ? OR dept_desc = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query])) {
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblrooms WHERE room_id = ? OR room_code = ?  OR room_name = ?;');
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
