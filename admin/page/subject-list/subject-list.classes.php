<?php

class DisplaySubjects extends Dbh
{
  protected function getData($course, $id, $studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades g, tblclass c WHERE g.student_number = ? AND g.sy_id = ? AND c.class_code = g.subj_code;');
    $result = 0;

    if (!$stmt->execute([$studentnumber, $id])) {
      $stmt = null;
      echo "error";
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades WHERE subj_code = ?;');
    $result = 0;

    if (!$stmt->execute([$query])) {
      $stmt = null;
      echo "error";
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      return $result;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }
}

class DisplaySubjectsContr extends DisplaySubjects
{
  private $id;
  private $studentnumber;
  private $course;

  public function __construct($course, $id, $studentnumber)
  {
    $this->id = $id;
    $this->studentnumber = $studentnumber;
    $this->course = $course;
  }

  public function fetchData()
  {
    $result = $this->getData($this->course, $this->id, $this->studentnumber);
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplaySubjectOptions extends Dbh
{
  protected function getData($course)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects WHERE subj_level = ?;');
    $result = 0;

    if (!$stmt->execute([$course])) {
      $stmt = null;
      echo "error";
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }
}

class DisplaySubjectOptionsContr extends DisplaySubjectOptions
{
  private $course;

  public function __construct($course)
  {
    $this->course = $course;
  }

  public function fetchData()
  {
    $result = $this->getData($this->course);
    return $result;
  }
}

$subjectOptions = new DisplaySubjectOptionsContr($course);
$options = $subjectOptions->fetchData();

$display = new DisplaySubjectsContr($course, $id, $studentnumber);
$result = $display->fetchData();
