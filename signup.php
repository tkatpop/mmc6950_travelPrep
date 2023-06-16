<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="all"/>
        <title>TravelPrep</title>
    </head>

    <header>
        <!--Logo only-->
    </header>

    <body>
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
            <div><p>Already a member? <a href="login.php">Login Here</a></p></div>

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
        <h4><a href="signup.php">Sign Up!</a></h4>
        <h4>&copy;TravelPrep2023</h4>
        <h4><a href="login.php">Login!</a></h4>
        <p>This website is for educational purposes only.</p>
    </footer>
    
</html>


