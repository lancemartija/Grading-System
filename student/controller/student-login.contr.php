<?php

class LoginCtr extends StudentLogin
{

    private $StudentID;

    public function __construct($StudentID)
    {
        $this->StudentID = $StudentID;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=empty");
            exit;
        }

        $this->getUser($this->StudentID);
    }

    private function emptyInput()
    {
        if (empty($this->StudentID)) {
            return false;
        }
        return true;
    }
}
