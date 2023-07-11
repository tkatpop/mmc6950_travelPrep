<?php
//SignUp Functions
    //Empty Input
    function emptyInputSignup($uid, $pwd, $pwdRepeat){
        $result;
        if(empty($uid) || empty($pwd) || empty($pwdRepeat)){
            $result = true;
        }else{
            $result = false;
        } 
        return $result;
    }

    //Invalid Username
    function invalidUid ($uid){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
            $result = true;
        }else{
            $result = false;
        } 
        return $result;
    }

    //Password does not match with repeated password
    function pwdMatch($pwd, $pwdRepeat){
        $result;
        if($pwd !== $pwdRepeat){
            $result = true;
        }else{
            $result = false;
        } 
        return $result;
    }

    //Username already exists
    function uidExists($conn, $uid){
        $sql = "SELECT * FROM users WHERE usersUid = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $uid);

        mysqli_stmt_execute($stmt);


        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    //Create User
    function createUser($conn, $uid, $pwd){
        $sql = "INSERT INTO users (usersUid, usersPwd) VALUES (?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=createstmtfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ss", $uid, $hashedPwd);

        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        header("location: ../main.php");

        exit();

    }
//Login Functions
    function emptyInputLogin($uid, $pwd){
        $result;
        if(empty($uid) ||  empty($pwd)){
            $result = true;
        }else{
            $result = false;
        } 
        return $result;
    }

    function loginUser($conn, $uid, $pwd){

        $uidExists = uidExists($conn, $uid);

        if ($uidExists === false){
            header("location: ../login.php?error=wronglogin");
            exit();
        }

        //Check is hashed password matches entered password
        $pwdHashed = $uidExists["usersPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if ($checkPwd === false){
            header("location: ../login.php?error=wronglogin");
            exit(); 
        }else if ($checkPwd === true){
            session_start();
            $_SESSION["userid"] = $uidExists["usersId"];
            $_SESSION["useruid"] = $uidExists["usersUid"];
            header("location: ../main.php");
            exit(); 
        }


    }