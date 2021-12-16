<?php

class AssignLoads extends Dbh
{
  protected function setLoads($instcode, $subjcode)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblclass (class_code, class_name, class_desc, class_inst,  class_level, class_ay) SELECT s.subj_code, s.subj_name, s.subj_desc, i.inst_name, s.subj_level, s.subj_ay FROM tblsubjects s INNER JOIN tblinstructor i WHERE subj_code = ? AND inst_code = ?;');

    if (!$stmt->execute([$subjcode, $instcode])) {
      $stmt = null;
      header('Location: ../view/loads.php?code=' . $this->code . '&error=stmtfailed');
      exit;
    }

    $stmt = null;
  }
}

// class DeleteLoads extends Dbh
// {
//   protected function setLoads($id)
//   {
//     $stmt = $this->connect()->prepare('DELETE FROM tblclass WHERE subj_id = ?; SET @num := 0; UPDATE tblclass SET subj_id = @num := (@num+1); ALTER TABLE tblclass AUTO_INCREMENT = 1;');

//     if (!$stmt->execute([$id])) {
//       $stmt = null;
//       header("Location: ../view/subjects.php?error=stmtfailed");
//       exit;
//     }

//     $stmt = null;
//   }
// }
