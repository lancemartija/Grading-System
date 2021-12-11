<?php

class Db
{
  private $hostname = 'localhost';
  private $username = 'admin';
  private $password = '';
  private $dbname = '';

  public function __construct()
  {
    $hostname = $this->hostname;
    $username = $this->username;
    $password = $this->password;
    $dbname = $this->dbname;
    $this->connect($hostname, $username, $password, $dbname);
  }

  private function connect($hostname, $username, $password, $dbname)
  {
    try {
      $dbh = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname, $username, $password);
      return $dbh;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br>";
      die();
    }
  }
}
