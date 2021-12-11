<?php

class Dbh
{
  private $hostname = 'localhost';
  private $username = 'admin';
  private $password = '';
  private $dbname = '';

  public function connect()
  {
    try {
      $dbh = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->dbname, $this->username, $this->password);
      return $dbh;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br>";
      die();
    }
  }
}
