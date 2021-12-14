<?php

class AddDept extends Dbh
{
  protected function setDept($deptname, $desc)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tbldepartment (dept_name, dept_desc) VALUES(?, ?);');

    if (!$stmt->execute([$deptname, $desc])) {
      $stmt = null;
      header("Location: ../view/department.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkDept($deptname)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbldepartment WHERE dept_name = ?;');

    if (!$stmt->execute([$deptname])) {
      $stmt = null;
      header('Location: ../view/department.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditDept extends Dbh
{
  protected function setDept($id, $deptname, $desc)
  {
    $stmt = $this->connect()->prepare('UPDATE tbldepartment SET dept_name = ?, dept_desc = ? WHERE dept_id = ?;');

    if (!$stmt->execute([$deptname, $desc, $id])) {
      $stmt = null;
      header("Location: ../view/department.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkDeptname($id, $uid)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbldepartment WHERE dept_id <> ? AND dept_name = ?;');

    if (!$stmt->execute([$id, $uid])) {
      $stmt = null;
      header('Location: ../view/department.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class DeleteDept extends Dbh
{
  protected function setDept($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tbldepartment WHERE dept_id = ?; SET @num := 0; UPDATE tbldepartment SET dept_id = @num := (@num+1); ALTER TABLE tbldepartment AUTO_INCREMENT = 1;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/department.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
