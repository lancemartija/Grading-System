<?php

class AddSubjects extends Dbh
{
  protected function setSubjects($code, $name, $desc, $level, $unit, $ay, $sem)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblsubjects (subj_code, subj_name, subj_desc, subj_level, subj_unit, subj_ay, subj_sem) VALUES(?, ?, ?, ?, ?, ?, ?);');

    if (!$stmt->execute([$code, $name, $desc, $level, $unit, $ay, $sem])) {
      $stmt = null;
      header("Location: ../view/subjects.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects WHERE subj_code = ?;');

    if (!$stmt->execute([$code])) {
      $stmt = null;
      header('Location: ../view/subjects.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditSubjects extends Dbh
{
  protected function setSubjects($id, $name, $desc, $level, $unit, $ay, $sem)
  {
    $stmt = $this->connect()->prepare('UPDATE tblsubjects SET subj_name = ?, subj_desc = ?, subj_level = ?, subj_unit = ?, subj_ay = ?, subj_sem = ? WHERE subj_id = ?;');

    if (!$stmt->execute([$name, $desc, $level, $unit, $ay, $sem, $id])) {
      $stmt = null;
      header("Location: ../view/subjects.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class DeleteSubjects extends Dbh
{
  protected function setSubjects($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblsubjects WHERE subj_id = ?; SET @num := 0; UPDATE tblsubjects SET subj_id = @num := (@num+1); ALTER TABLE tblsubjects AUTO_INCREMENT = 1;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/subjects.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
