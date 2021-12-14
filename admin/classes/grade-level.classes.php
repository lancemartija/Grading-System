<?php

class AddGradeLevel extends Dbh
{
  protected function setGradeLevel($code, $name, $level, $desc)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblcourse (course_code, course_name, course_level, course_desc) VALUES(?, ?, ?, ?);');

    if (!$stmt->execute([$code, $name, $level, $desc])) {
      $stmt = null;
      header("Location: ../view/grade-level.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblcourse WHERE course_code = ?;');

    if (!$stmt->execute([$code])) {
      $stmt = null;
      header('Location: ../view/grade-level.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditGradeLevel extends Dbh
{
  protected function setGradeLevel($id, $code, $name, $level, $desc)
  {
    $stmt = $this->connect()->prepare('UPDATE tblcourse SET course_code = ?, course_name = ?, course_level = ?, course_desc = ? WHERE course_id = ?;');

    if (!$stmt->execute([$code, $name, $level, $desc, $id])) {
      $stmt = null;
      header("Location: ../view/grade-level.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($id, $code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblcourse WHERE course_id <> ? AND course_code = ?;');

    if (!$stmt->execute([$id, $code])) {
      $stmt = null;
      header('Location: ../view/grade-level.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class DeleteGradeLevel extends Dbh
{
  protected function setGradeLevel($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblcourse WHERE course_id = ?; SET @num := 0; UPDATE tblcourse SET course_id = @num := (@num+1); ALTER TABLE tblcourse AUTO_INCREMENT = 1;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/grade-level.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
