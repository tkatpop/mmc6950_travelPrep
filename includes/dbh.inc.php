<?php

//Database Handler

$serverName = "localhost";
$dbUserName = "root"; //Need to change when put on domain phpMyAdmin
$dbPassword = "root"; //Need to change when put on domain phpMyAdmin
$dbName = "mmc6950_travelprep"; //Make sure this matches the one on the domain

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}