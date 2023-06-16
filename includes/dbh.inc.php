<?php

//Database Handler

$serverName = "localhost";
$dbUserName = "practicePOC";
$dbPassword = "XeFw}FqOyd_U";
$dbName = "mmc6950Practice1";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}