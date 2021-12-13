<?php

class AddUser extends Dbh
{
  protected function setUser($fname, $lname, $email, $uid, $pwd, $type)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tbluseraccounts (account_firstname, account_lastname, account_email, account_username, account_password, account_type) VALUES(?, ?, ?, ?, ?, ?);');

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if (!$stmt->execute([$fname, $lname, $email, $uid, $hashedPwd, $type])) {
      $stmt = null;
      header("Location: ../view/users.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkUser($uid, $email)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbluseraccounts WHERE account_username = ? OR account_email = ?');

    if (!$stmt->execute([$uid, $email])) {
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
