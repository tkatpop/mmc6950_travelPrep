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
            <h2>SIGNUP</h2>
            <!--Form section-->
            <div class="index-login-signup">
                <!--Form for SignUp for an account-->
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdRepeat" placeholder="Repeat Password">
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
            <p>Already a member? </p>
            <br>
            <a href="login.php">Login Here</a>

            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all fields!</p>";
                    } else if($_GET["error"] == "invaliduid"){
                        echo "<p>Choose a different username.</p>";
                    }else if($_GET["error"] == "invalidemail"){
                        echo "<p>Provide a different email.</p>";
                    }else if($_GET["error"] == "passwordnotmatch"){
                        echo "<p>Passwords do not match.</p>";
                    }else if($_GET["error"] == "stmtfailed"){
                        echo "<p>Oops! Something went wrong. Please try again.</p>";
                    }else if($_GET["error"] == "usernametaken"){
                        echo "<p>Username is already been used.</p>";
                    }else if($_GET["error"] == "none"){
                        echo "<p>You are signed up!</p>";
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


