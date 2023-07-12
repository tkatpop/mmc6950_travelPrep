<?php

//Database Handler

$serverName = "localhost";
$dbUserName = "traveller2023"; 
$dbPassword = "kV!ei9srj]78x9d"; 
$dbName = "mmc6950_travelprep"; 

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}