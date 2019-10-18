<?php

$currency = "₹";
$dbHost = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "funding";

$conn=mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);
if(mysqli_connect_error()){
    die('Connection Error: '.mysqli_connect_error());
}

?>