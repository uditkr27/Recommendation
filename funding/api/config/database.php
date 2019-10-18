<?php

class Database{
 
    private $dbHost = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "funding";
    public $conn;
 
    // get the database connection
    public function getConnection(){
        $this->conn = mysqli_connect($dbHost, $dbUserName, $dbPassword, $dbName);
        return $this->conn;
    }
}
?>