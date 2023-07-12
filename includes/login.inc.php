<?php

if (isset($_POST["submit"])){

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($uid, $pwd) !== false){
        header("location: ../login.php?error=emptyinputlogin");
        exit();
    }

    
    // loginUser($conn, $uid, $pwd); Not working properly
    header("location: ../main.php");

} else{
    //Going back to front page
    header("location: ../index.html");
    exit();
}