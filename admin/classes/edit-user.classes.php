<?php

// $duplicate_sql = "SELECT * FROM tblstudent WHERE fIdstudentno = $student_number AND fIdstudentno <> $id";

class EditUser extends Dbh
{
  protected function setUser($id, $fname, $lname, $email, $uid, $pwd, $type)
  {
    $stmt = $this->connect()->prepare('UPDATE tbluseraccounts SET account_firstname = ?, account_lastname = ?, account_email = ?, account_username = ?, account_password = ?, account_type = ? WHERE account_id = ?;');

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if (!$stmt->execute([$fname, $lname, $email, $uid, $hashedPwd, $type, $id])) {
      $stmt = null;
      header("Location: ../view/users.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkUsername($id, $uid)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbluseraccounts WHERE account_id <> ? AND account_username = ?;');

    if (!$stmt->execute([$id, $uid])) {
      $stmt = null;
      header('Location: ../view/users.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }

  protected function checkEmail($id, $email)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbluseraccounts WHERE account_id <> ? AND account_email = ?;');

    if (!$stmt->execute([$id, $email])) {
      $stmt = null;
      header('Location: ../view/users.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}
