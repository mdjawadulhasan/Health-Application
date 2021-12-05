<?php

session_start();
if (!isset($_SESSION["user_name"])) {
    header("refresh: 0; url=Adminhome.php");
    exit();
}

header('Content-Type: application/json');

$mysqli = new mysqli('localhost', 'root', '', 'phawa');

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}



$query = sprintf("SELECT ptage,ptbgrp FROM patienttbl ");


//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);