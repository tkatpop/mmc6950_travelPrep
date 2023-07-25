<?php

session_start();
session_unset();
session_destroy();

?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="all"/>
        <!--Adobe Fonts-->
        <link rel="stylesheet" href="https://use.typekit.net/uuu4lfb.css">
        <title>TravelPrep</title>
    </head>

    <header>
        <img src="images/logo_darkB.png" alt="travelPrep Logo"> 
    </header>

    <body class="cover_container">
        <section class="index-logout">
            <h2>You have successfully logged out!</h2>
            <p>If this was by accident, log back in here</p>
            <br>
            <a href="login.php">LOGIN</a>
        </section>
    
    </body>

    <footer>
        <!--Simplified footer with only Login Link, Signup Link, and copyright-->
        <h4><a href="signup.php">SIGNUP</a></h4>
        <h4>&copy;travelPrep2023</h4>
        <h4><a href="login.php">LOGIN</a></h4>
        <br>
        <p>This website is for educational purposes only.</p>
    </footer>
    
</html>