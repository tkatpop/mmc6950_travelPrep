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

    <body>
        <section>
            <h2>LOGOUT</h2>
            <div><p>Accidentlly logged out? <a href="login.php">Login Back in Here</a></p></div>
        </section>
    
    </body>

    <footer>
        <!--Simplified footer with only Login Link, Signup Link, and copyright-->
        <h4><a href="signup.php">Sign Up!</a></h4>
        <h4>&copy;TravelPrep2023</h4>
        <h4><a href="login.php">Login!</a></h4>
        <p>This website is for educational purposes only.</p>
    </footer>
    
</html>