<?php

class AddFaculty extends Dbh
{
  protected function setFaculty($code, $name, $address, $gender, $status, $email, $empstatus)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblinstructor (inst_code, inst_name, inst_address, inst_gender, inst_status, inst_email, inst_empstatus) VALUES(?, ?, ?, ?, ?, ?, ?);');

    if (!$stmt->execute([$code, $name, $address, $gender, $status, $email, $empstatus])) {
      $stmt = null;
      header("Location: ../view/faculty.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblinstructor WHERE inst_code = ?;');

    if (!$stmt->execute([$code])) {
      $stmt = null;
      header('Location: ../view/faculty.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditFaculty extends Dbh
{
  protected function setFaculty($id, $code, $name, $address, $gender, $status, $email, $empstatus)
  {
    $stmt = $this->connect()->prepare('UPDATE tblinstructor SET inst_code = ?, inst_name = ?, inst_address = ?, inst_gender = ?, inst_status = ?, inst_email = ?, inst_empstatus = ? WHERE inst_id = ?;');

    if (!$stmt->execute([$code, $name, $address, $gender, $status, $email, $empstatus, $id])) {
      $stmt = null;
      header("Location: ../view/faculty.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($id, $code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblinstructor WHERE inst_id <> ? AND inst_code = ?;');

    if (!$stmt->execute([$id, $code])) {
      $stmt = null;
      header('Location: ../view/faculty.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class DeleteFaculty extends Dbh
{
  protected function setFaculty($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblinstructor WHERE inst_id = ?; SET @num := 0; UPDATE tblinstructor SET inst_id = @num := (@num+1); ALTER TABLE tblinstructor AUTO_INCREMENT = 1;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/faculty.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
