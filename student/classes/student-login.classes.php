<?php

class StudentLogin extends Dbh
{

    protected function getUser($studentID)
    {

        $stmt = $this->connect()->prepare("SELECT * FROM tblstudents WHERE student_number = ?;");


        if (!$stmt->execute([$studentID])) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit;
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit;
        }
    }
}
