<?php

class AddSubjectsContr extends AddSubjects
{
  private $code;
  private $name;
  private $desc;
  private $unit;
  private $ay;
  private $sem;

  public function __construct($code, $name, $desc, $unit, $ay, $sem)
  {
    $this->code = $code;
    $this->name = $name;
    $this->desc = $desc;
    $this->unit = $unit;
    $this->ay = $ay;
    $this->sem = $sem;
  }

  public function addSubjects()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/subjects.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->code) == false) {
      header('Location: ../view/subjects.php?error=subjectalreadyexists');
      exit;
    }

    $this->setSubjects($this->code, $this->name, $this->desc, $this->unit, $this->ay, $this->sem);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->name) || empty($this->desc) || empty($this->unit) || empty($this->ay) || empty($this->sem)) {
      return false;
    }
    return true;
  }
}

class EditSubjectsContr extends EditSubjects
{
  private $id;
  private $name;
  private $desc;
  private $unit;
  private $ay;
  private $sem;

  public function __construct($id, $name, $desc, $unit, $ay, $sem)
  {
    $this->id = $id;
    $this->name = $name;
    $this->desc = $desc;
    $this->unit = $unit;
    $this->ay = $ay;
    $this->sem = $sem;
  }

  public function editSubjects()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/subjects.php?error=emptyinput');
      exit;
    }

    $this->setSubjects($this->id, $this->name, $this->desc, $this->unit, $this->ay, $this->sem);
  }

  private function emptyInput()
  {
    if (empty($this->name) || empty($this->desc) || empty($this->unit) || empty($this->ay) || empty($this->sem)) {
      return false;
    }
    return true;
  }
}

class DeleteSubjectsContr extends DeleteSubjects
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteSubjects()
  {
    $this->setSubjects($this->id);
  }
}
