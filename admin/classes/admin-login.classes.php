<?php

class Login extends Dbh
{
  protected function getUser($uid, $pwd)
  {
    $stmt = $this->connect()->prepare('SELECT account_password FROM tbluseraccounts WHERE account_username = ?;');

    if (!$stmt->execute([$uid])) {
      $stmt = null;
      header("Location: ../index.php?error=stmtfailed");
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ../index.php?error=usernotfound");
      exit;
    }

    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkedPwd = password_verify($pwd, $pwdHashed[0]['account_password']);

    if ($checkedPwd == false) {
      $stmt = null;
      header("Location: ../index.php?error=wrongpassword");
      exit;
    } else {
      $pwd = $pwdHashed[0]['account_password'];
      $stmt = $this->connect()->prepare('SELECT * FROM tbluseraccounts WHERE account_username = ? AND account_password = ?;');

      if (!$stmt->execute([$uid, $pwd])) {
        $stmt = null;
        header("Location: ../index.php?error=stmtfailed");
        exit;
      }

      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("Location: ../index.php?error=usernotfound");
        exit;
      }

      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

      session_start();

      $_SESSION['userid'] = $user[0]['account_id'];
      $_SESSION['useruid'] = $user[0]['account_name'];
    }

    $stmt = null;
  }
}
