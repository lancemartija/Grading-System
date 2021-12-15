<?php

class AddFacultyContr extends AddFaculty
{
  private $code;
  private $name;
  private $address;
  private $gender;
  private $status;
  private $email;
  private $empstatus;

  public function __construct($code, $name, $address, $gender, $status, $email, $empstatus)
  {
    $this->code = $code;
    $this->name = $name;
    $this->address = $address;
    $this->gender = $gender;
    $this->status = $status;
    $this->email = $email;
    $this->empstatus = $empstatus;
  }

  public function addFaculty()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/faculty.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->code) == false) {
      header('Location: ../view/faculty.php?error=facultyalreadyexists');
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/faculty.php?error=invalidemail');
      exit;
    }

    $this->setFaculty($this->code, $this->name, $this->address, $this->gender, $this->status, $this->email, $this->empstatus);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->name) || empty($this->address) || empty($this->gender) || empty($this->status) || empty($this->email) || empty($this->empstatus)) {
      return false;
    }
    return true;
  }

  private function invalidEmail()
  {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }
    return true;
  }
}

class EditFacultyContr extends EditFaculty
{
  private $id;
  private $name;
  private $address;
  private $gender;
  private $status;
  private $email;
  private $empstatus;

  public function __construct($id, $name, $address, $gender, $status, $email, $empstatus)
  {
    $this->id = $id;
    $this->name = $name;
    $this->address = $address;
    $this->gender = $gender;
    $this->status = $status;
    $this->email = $email;
    $this->empstatus = $empstatus;
  }

  public function editFaculty()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/faculty.php?error=emptyinput');
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/faculty.php?error=invalidemail');
      exit;
    }

    $this->setFaculty($this->id, $this->name, $this->address, $this->gender, $this->status, $this->email, $this->empstatus);
  }

  private function emptyInput()
  {
    if (empty($this->name) || empty($this->address) || empty($this->gender) || empty($this->status) || empty($this->email) || empty($this->empstatus)) {
      return false;
    }
    return true;
  }

  private function invalidEmail()
  {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }
    return true;
  }
}

class DeleteFacultyContr extends DeleteFaculty
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteFaculty()
  {
    $this->setFaculty($this->id);
  }
}
