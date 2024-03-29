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
        <section class="index-login">
            <h2>LOGIN</h2>
            <!--Form section-->
                <!--Form for Login after they have already created an account-->
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login</button>
                </form>

            <p>Not a member?</p> 
            <br>
            <a href="signup.php">Sign Up Here</a>

            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "emptyinputlogin"){
                        echo "<p>Fill in all login fields!</p>";
                    } else if($_GET["error"] == "wronglogin"){
                        echo "<p>Incorrect login information.</p>";
                    }else if($_GET["error"] == "nonelog"){
                        echo "<p>You are signed in!</p>";
                    }
                }

            ?>
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