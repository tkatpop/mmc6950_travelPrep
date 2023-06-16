<?php

if(isset($_POST["submit"])){
    //Grabbing information from the form fields on Sign Up form
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Check that input fields are inputed correctly:

    //Empty Input

    if (emptyInputSignup($uid, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    //Invalid Username

    if (invalidUid ($uid) !== false){
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    //Password does not match with repeated password
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=passwordnotmatch");
        exit();
    }

    // //Username already exists
    // if (uidExists($conn, $uid) !== false){
    //     header("location: ../signup.php?error=usernametaken");
    //     exit();
    // }

    //Create User
    createUser($conn, $uid, $pwd);


}else {
    //Going back to front page
    header("location: ../index.html");
}