<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="all"/>
        <title>TravelPrep</title>
    </head>

    <header>
        <!--LOGO goes here-->
        
        <!--Header nav bar after logged in-->
        <nav>
            <button class="hamburger-btn">
                <i class="menuIcon material-icons">menu</i>
                <i class="closeIcon material-icons">close</i>
            </button>

            <ul class="hamburger-menu" id="main-menu">
                <li><a class="menuItem" href="main.php">Home</a></li>
                <li><a class="menuItem" href="packingList.php">Packing List</a></li>
                <li><a class="menuItem" href="locationInfo.php">Locations</a></li>
                <li><a class="menuItem" href="addLinks.php">Additional Info</a></li>
                <li><a class="menuItem" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <body>
       <div id="container">
        
            <!--This is where the content goes-->

            <div>
                <!--ADD PHP WELCOME WITH USER NAME-->
                <?php
                    echo "<p>Welcome, " . $_SESSION["useruid"] . "</p>";
                ?>
            </div>





        </div> <!--Closing tag for #container-->


        <footer id="footer">
             <!--Footer nav bar after logged in-->
             <ul class="footer-menu">
                <li><a  href="main.php">Home</a></li>
                <li><a  href="packingList.php">Packing List</a></li>
                <li><a  href="locationInfo.php">Locations</a></li>
            </ul>

            &copy; <?php echo date('Y'); ?> 

            <h4><a href="logout.php">Logout</a></h4>
        </footer>

        <script src="js/main.js"></script>
    </body>
</html>