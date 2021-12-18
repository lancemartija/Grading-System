<?php

// class DisplaySubjects extends Dbh
// {
//   protected function getData($studentnumber)
//   {
//     $stmt = $this->connect()->prepare('SELECT * FROM tblgrades WHERE student_number = ?;');
//     $result = 0;

//     if (!$stmt->execute([$studentnumber])) {
//       $stmt = null;
//       echo "error";
//       exit;
//     }

//     while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
//       $result = $row;
//     }

//     $stmt = null;
//     return $result;
//   }

//   protected function getSearchData($query)
//   {
//     $stmt = $this->connect()->prepare('SELECT * FROM tblgrades WHERE subj_code = ?;');
//     $result = 0;

//     if (!$stmt->execute([$query])) {
//       $stmt = null;
//       echo "error";
//       exit;
//     }

//     if ($stmt->rowCount() == 0) {
//       $stmt = null;
//       return $result;
//     }

//     while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
//       $result = $row;
//     }

//     $stmt = null;
//     return $result;
//   }
// }

// class DisplaySubjectsContr extends DisplaySubjects
// {
//   private $studentnumber;

//   public function __construct($studentnumber)
//   {
//     $this->studentnumber = $studentnumber;
//   }

//   public function fetchData()
//   {
//     $result = $this->getData($this->studentnumber);
//     return $result;
//   }

//   public function fetchSearchData($query)
//   {
//     $this->query = $query;
//     $result = $this->getSearchData($this->query);
//     return $result;
//   }
// }

class DisplayOptions extends Dbh
{
  protected function getData($course)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects s, tblgrades g WHERE s.subj_code <> g.subj_code AND s.subj_level = ?;');
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

class DisplayOptionsContr extends DisplayOptions
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

$subjectOptions = new DisplayOptionsContr($course);
$options = $subjectOptions->fetchData();

// $display = new DisplaySubjectsContr($studentnumber);
// $result = $display->fetchData();
