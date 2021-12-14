<?php

class AddRooms extends Dbh
{
  protected function setRooms($code, $name, $desc)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblrooms (room_code, room_name, room_desc) VALUES(?, ?, ?);');

    if (!$stmt->execute([$code, $name, $desc])) {
      $stmt = null;
      header("Location: ../view/rooms.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblrooms WHERE room_code = ?;');

    if (!$stmt->execute([$code])) {
      $stmt = null;
      header('Location: ../view/rooms.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditRooms extends Dbh
{
  protected function setRooms($id, $code, $name, $desc)
  {
    $stmt = $this->connect()->prepare('UPDATE tblrooms SET room_code = ?, room_name = ?, room_desc = ? WHERE room_id = ?;');

    if (!$stmt->execute([$code, $name, $desc, $id])) {
      $stmt = null;
      header("Location: ../view/rooms.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($id, $code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblrooms WHERE room_id <> ? AND room_code = ?;');

    if (!$stmt->execute([$id, $code])) {
      $stmt = null;
      header('Location: ../view/rooms.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class DeleteRooms extends Dbh
{
  protected function setRooms($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblrooms WHERE room_id = ?; SET @num := 0; UPDATE tblrooms SET room_id = @num := (@num+1); ALTER TABLE tblrooms AUTO_INCREMENT = 1;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/rooms.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
