<?php

class AddDeptContr extends AddDept
{
  private $deptname;
  private $desc;

  public function __construct($deptname, $desc)
  {
    $this->deptname = $deptname;
    $this->desc = $desc;
  }

  public function addDept()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/department.php?error=emptyinput');
      exit;
    }

    if ($this->checkDept($this->deptname) == false) {
      header('Location: ../view/department.php?error=deptalreadyexists');
      exit;
    }

    $this->setDept($this->deptname, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->deptname) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class EditDeptContr extends EditDept
{
  private $id;
  private $deptname;
  private $desc;

  public function __construct($id, $deptname, $desc)
  {
    $this->id = $id;
    $this->deptname = $deptname;
    $this->desc = $desc;
  }

  public function editDept()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/department.php?error=emptyinput');
      exit;
    }

    if ($this->checkDeptname($this->id, $this->uid) == false) {
      header('Location: ../view/department.php?error=deptalreadyexists');
      exit;
    }

    $this->setDept($this->id, $this->deptname, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->deptname) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class DeleteDeptContr extends DeleteDept
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteDept()
  {
    $this->setDept($this->id);
  }
}
