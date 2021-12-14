<?php

class AddGradeLevelContr extends AddGradeLevel
{
  private $code;
  private $name;
  private $level;
  private $desc;

  public function __construct($code, $name, $level,  $desc)
  {
    $this->code = $code;
    $this->name = $name;
    $this->level = $level;
    $this->desc = $desc;
  }

  public function addGradeLevel()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/grade-level.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->code) == false) {
      header('Location: ../view/grade-level.php?error=gradelevelalreadyexists');
      exit;
    }

    $this->setGradeLevel($this->code, $this->name, $this->level, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->name) || empty($this->level) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class EditGradeLevelContr extends EditGradeLevel
{
  private $id;
  private $code;
  private $name;
  private $level;
  private $desc;

  public function __construct($id, $code, $name, $level, $desc)
  {
    $this->id = $id;
    $this->code = $code;
    $this->name = $name;
    $this->level = $level;
    $this->desc = $desc;
  }

  public function editGradeLevel()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/grade-level.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->id, $this->code) == false) {
      header('Location: ../view/grade-level.php?error=gradelevelalreadyexists');
      exit;
    }

    $this->setGradeLevel($this->id, $this->code, $this->name, $this->level, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->name) || empty($this->level) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class DeleteGradeLevelContr extends DeleteGradeLevel
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteGradeLevel()
  {
    $this->setGradeLevel($this->id);
  }
}
