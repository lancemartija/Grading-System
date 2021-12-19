<?php

class DisplayStudents extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblstudents;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblstudents WHERE student_number = ? OR student_fname = ? OR student_mname = ? OR student_lname = ? OR student_gender = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query])) {
      $stmt = null;
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

class DisplaySubjects extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblsubjects;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects WHERE subj_name = ? OR subj_level = ? OR subj_ay = ? OR subj_sem = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query])) {
      $stmt = null;
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

class DisplayYear extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblyear;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblyear WHERE ay_name = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query])) {
      $stmt = null;
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

class DisplayGradeLevel extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblcourse;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblcourse WHERE course_name = ? OR course_level = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query])) {
      $stmt = null;
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

class DisplayFaculty extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblinstructor;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblinstructor WHERE inst_name = ? OR inst_gender = ? OR inst_empstatus = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
      $stmt = null;
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

class DisplayDept extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tbldepartment;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
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
    $stmt = $this->connect()->prepare('SELECT * FROM tbldepartment WHERE dept_id = ? OR dept_name = ? OR dept_desc = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
      $stmt = null;
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

class DisplayRooms extends Dbh
{
  protected function getRooms()
  {
    $sql = 'SELECT * FROM tblrooms;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
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
    $stmt = $this->connect()->prepare('SELECT * FROM tblrooms WHERE room_id = ? OR room_name = ? OR room_desc = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
      $stmt = null;
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

class DisplayUsers extends Dbh
{
  protected function getUsers()
  {
    $sql = 'SELECT * FROM tbluseraccounts;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  protected function getUser($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbluseraccounts WHERE account_id = ? OR account_firstname = ? OR account_lastname = ? OR account_username = ? OR account_type = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query])) {
      $stmt = null;
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
